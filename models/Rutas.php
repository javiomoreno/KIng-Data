<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Rutas".
 *
 * @property integer $RutaID
 * @property string $RutaNombre
 * @property string $RutaFecha
 * @property integer $UsuarioID
 *
 * @property Clientes[] $clientes
 * @property Usuarios $usuario
 */
class Rutas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Rutas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RutaNombre', 'RutaFecha', 'UsuarioID'], 'required'],
            [['RutaFecha'], 'safe'],
            [['UsuarioID'], 'integer'],
            [['RutaNombre'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'RutaID' => 'Ruta ID',
            'RutaNombre' => 'Ruta Nombre',
            'RutaFecha' => 'Ruta Fecha',
            'UsuarioID' => 'Usuario ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Clientes::className(), ['RutaID' => 'RutaID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuarios::className(), ['UsuarioID' => 'UsuarioID']);
    }
}
