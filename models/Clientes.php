<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Clientes".
 *
 * @property integer $ClienteID
 * @property string $ClienteNombre
 * @property string $ClienteCedula
 * @property string $ClienteDireccion
 * @property string $ClienteEmail
 * @property string $ClienteTelefono
 * @property string $ClienteContacto
 * @property string $Observaciones
 * @property integer $RutaID
 *
 * @property Rutas $ruta
 * @property Ordenes[] $ordenes
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ClienteNombre', 'ClienteCedula', 'RutaID'], 'required'],
            [['RutaID'], 'integer'],
            [['ClienteNombre', 'ClienteEmail', 'ClienteContacto'], 'string', 'max' => 100],
            [['ClienteCedula'], 'string', 'max' => 45],
            [['ClienteDireccion', 'Observaciones'], 'string', 'max' => 200],
            [['ClienteTelefono'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ClienteID' => 'Cliente ID',
            'ClienteNombre' => 'Cliente Nombre',
            'ClienteCedula' => 'Cliente Cedula',
            'ClienteDireccion' => 'Cliente Direccion',
            'ClienteEmail' => 'Cliente Email',
            'ClienteTelefono' => 'Cliente Telefono',
            'ClienteContacto' => 'Cliente Contacto',
            'Observaciones' => 'Observaciones',
            'RutaID' => 'Ruta ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRuta()
    {
        return $this->hasOne(Rutas::className(), ['RutaID' => 'RutaID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenes()
    {
        return $this->hasMany(Ordenes::className(), ['ClienteID' => 'ClienteID']);
    }
}
