<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ordenes".
 *
 * @property integer $OrdenID
 * @property string $OrdenFecha
 * @property string $OrdenEstado
 * @property string $Observaciones
 * @property string $Ordencol
 * @property integer $ClienteID
 * @property integer $FormaPagoID
 *
 * @property Clientes $cliente
 * @property FormasPagos $formaPago
 * @property OrdenesProductos[] $ordenesProductos
 * @property Productos[] $productos
 */
class Ordenes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Ordenes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrdenFecha', 'ClienteID', 'FormaPagoID'], 'required'],
            [['OrdenFecha'], 'safe'],
            [['ClienteID', 'FormaPagoID'], 'integer'],
            [['OrdenEstado', 'Ordencol'], 'string', 'max' => 45],
            [['Observaciones'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OrdenID' => 'Orden ID',
            'OrdenFecha' => 'Orden Fecha',
            'OrdenEstado' => 'Orden Estado',
            'Observaciones' => 'Observaciones',
            'Ordencol' => 'Ordencol',
            'ClienteID' => 'Cliente ID',
            'FormaPagoID' => 'Forma Pago ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Clientes::className(), ['ClienteID' => 'ClienteID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormaPago()
    {
        return $this->hasOne(FormasPagos::className(), ['FormaPagoID' => 'FormaPagoID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenesProductos()
    {
        return $this->hasMany(OrdenesProductos::className(), ['OrdenID' => 'OrdenID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Productos::className(), ['ProductoID' => 'ProductoID'])->viaTable('Ordenes_Productos', ['OrdenID' => 'OrdenID']);
    }
}
