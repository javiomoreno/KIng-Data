<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Productos".
 *
 * @property integer $ProductoID
 * @property string $ProductoNombre
 * @property string $ProductoDescripcion
 * @property string $ProductoModelo
 * @property string $ProductoColor
 * @property string $ProductoSKU
 * @property string $ProductoIm1
 * @property string $ProductoIm2
 * @property string $ProductoIm3
 * @property integer $ProductoDisponible
 * @property integer $ProductoMaximo
 * @property integer $Productocol
 * @property string $ProductoPrecio
 * @property string $ProductoIva
 * @property integer $TipoProductoID
 * @property integer $ProveedorID
 *
 * @property OrdenesProductos[] $ordenesProductos
 * @property Ordenes[] $ordens
 * @property Proveedores $proveedor
 * @property TiposProductos $tipoProducto
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Productos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductoNombre', 'TipoProductoID', 'ProveedorID'], 'required'],
            [['ProductoDisponible', 'ProductoMaximo', 'Productocol', 'TipoProductoID', 'ProveedorID'], 'integer'],
            [['ProductoPrecio', 'ProductoIva'], 'number'],
            [['ProductoNombre'], 'string', 'max' => 100],
            [['ProductoDescripcion', 'ProductoModelo', 'ProductoColor', 'ProductoSKU'], 'string', 'max' => 45],
            [['ProductoIm1', 'ProductoIm2', 'ProductoIm3'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductoID' => 'Producto ID',
            'ProductoNombre' => 'Producto Nombre',
            'ProductoDescripcion' => 'Producto Descripcion',
            'ProductoModelo' => 'Producto Modelo',
            'ProductoColor' => 'Producto Color',
            'ProductoSKU' => 'Producto Sku',
            'ProductoIm1' => 'Producto Im1',
            'ProductoIm2' => 'Producto Im2',
            'ProductoIm3' => 'Producto Im3',
            'ProductoDisponible' => 'Producto Disponible',
            'ProductoMaximo' => 'Producto Maximo',
            'Productocol' => 'Productocol',
            'ProductoPrecio' => 'Producto Precio',
            'ProductoIva' => 'Producto Iva',
            'TipoProductoID' => 'Tipo Producto ID',
            'ProveedorID' => 'Proveedor ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenesProductos()
    {
        return $this->hasMany(OrdenesProductos::className(), ['ProductoID' => 'ProductoID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdens()
    {
        return $this->hasMany(Ordenes::className(), ['OrdenID' => 'OrdenID'])->viaTable('Ordenes_Productos', ['ProductoID' => 'ProductoID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProveedor()
    {
        return $this->hasOne(Proveedores::className(), ['ProveedorID' => 'ProveedorID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoProducto()
    {
        return $this->hasOne(TiposProductos::className(), ['TipoProductoID' => 'TipoProductoID']);
    }
}
