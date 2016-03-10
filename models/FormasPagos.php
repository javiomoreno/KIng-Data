<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "FormasPagos".
 *
 * @property integer $FormaPagoID
 * @property string $FormaPagoNombre
 *
 * @property Ordenes[] $ordenes
 */
class FormasPagos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'FormasPagos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FormaPagoNombre'], 'required'],
            [['FormaPagoNombre'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'FormaPagoID' => 'Forma Pago ID',
            'FormaPagoNombre' => 'Forma Pago Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenes()
    {
        return $this->hasMany(Ordenes::className(), ['FormaPagoID' => 'FormaPagoID']);
    }
}
