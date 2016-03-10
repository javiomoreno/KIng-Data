<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Roles".
 *
 * @property integer $RolID
 * @property string $RolNombre
 *
 * @property Usuarios[] $usuarios
 */
class Roles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RolNombre'], 'required'],
            [['RolNombre'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'RolID' => 'Rol ID',
            'RolNombre' => 'Rol Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['RolID' => 'RolID']);
    }
}
