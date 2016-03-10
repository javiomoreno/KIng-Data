<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ordenes_Productos".
 *
 * @property integer $OrdenID
 * @property integer $ProductoID
 * @property integer $CantidadProducto
 * @property string $TotalPrecio
 *
 * @property Ordenes $orden
 * @property Productos $producto
 */
class OrdenesProductos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Ordenes_Productos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrdenID', 'ProductoID'], 'required'],
            [['OrdenID', 'ProductoID', 'CantidadProducto'], 'integer'],
            [['TotalPrecio'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OrdenID' => 'Orden ID',
            'ProductoID' => 'Producto ID',
            'CantidadProducto' => 'Cantidad Producto',
            'TotalPrecio' => 'Total Precio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrden()
    {
        return $this->hasOne(Ordenes::className(), ['OrdenID' => 'OrdenID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducto()
    {
        return $this->hasOne(Productos::className(), ['ProductoID' => 'ProductoID']);
    }
}
