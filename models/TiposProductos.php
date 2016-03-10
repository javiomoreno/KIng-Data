<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TiposProductos".
 *
 * @property integer $TipoProductoID
 * @property string $TipoProductoNombre
 *
 * @property Productos[] $productos
 */
class TiposProductos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TiposProductos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TipoProductoNombre'], 'required'],
            [['TipoProductoNombre'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TipoProductoID' => 'Tipo Producto ID',
            'TipoProductoNombre' => 'Tipo Producto Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Productos::className(), ['TipoProductoID' => 'TipoProductoID']);
    }
}
