<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TiposUsuarios".
 *
 * @property integer $idTipoUsuario
 * @property string $nombre
 * @property string $descripcion
 *
 * @property Usuarios[] $usuarios
 */
class TiposUsuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TiposUsuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 50],
            [['descripcion'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTipoUsuario' => 'Id Tipo Usuario',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['TiposUsuarios_idTipoUsuario' => 'idTipoUsuario']);
    }
}
