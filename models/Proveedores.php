<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Proveedores".
 *
 * @property integer $ProveedorID
 * @property string $ProveedorNombre
 * @property string $ProveedorEmail
 * @property string $ProveedorTelefono
 * @property string $ProveedorDireccion
 *
 * @property Productos[] $productos
 */
class Proveedores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Proveedores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProveedorNombre'], 'required'],
            [['ProveedorNombre', 'ProveedorEmail', 'ProveedorTelefono'], 'string', 'max' => 100],
            [['ProveedorDireccion'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProveedorID' => 'Proveedor ID',
            'ProveedorNombre' => 'Proveedor Nombre',
            'ProveedorEmail' => 'Proveedor Email',
            'ProveedorTelefono' => 'Proveedor Telefono',
            'ProveedorDireccion' => 'Proveedor Direccion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Productos::className(), ['ProveedorID' => 'ProveedorID']);
    }
}
