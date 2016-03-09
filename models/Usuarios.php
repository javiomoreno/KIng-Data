<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "Usuarios".
 *
 * @property integer $UsuarioID
 * @property string $UsuarioNombre
 * @property string $UsuarioApellido
 * @property string $UsuarioEmail
 * @property string $UsuarioAlias
 * @property string $UsuarioTelefono
 * @property string $UsuarioClave
 * @property string $UsuarioDireccion
 * @property string $Usuariocol
 * @property integer $RolID
 *
 * @property Rutas[] $rutas
 * @property Roles $rol
 */
class Usuarios extends ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UsuarioNombre', 'UsuarioApellido', 'UsuarioEmail', 'UsuarioAlias', 'UsuarioClave', 'RolID'], 'required'],
            [['RolID'], 'integer'],
            [['UsuarioNombre', 'UsuarioApellido', 'UsuarioEmail'], 'string', 'max' => 100],
            [['UsuarioAlias'], 'string', 'max' => 50],
            [['UsuarioTelefono'], 'string', 'max' => 20],
            [['UsuarioClave', 'UsuarioDireccion'], 'string', 'max' => 200],
            [['Usuariocol'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UsuarioID' => 'Usuario ID',
            'UsuarioNombre' => 'Usuario Nombre',
            'UsuarioApellido' => 'Usuario Apellido',
            'UsuarioEmail' => 'Usuario Email',
            'UsuarioAlias' => 'Usuario Alias',
            'UsuarioTelefono' => 'Usuario Telefono',
            'UsuarioClave' => 'Usuario Clave',
            'UsuarioDireccion' => 'Usuario Direccion',
            'Usuariocol' => 'Usuariocol',
            'RolID' => 'Rol ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRutas()
    {
        return $this->hasMany(Rutas::className(), ['UsuarioID' => 'UsuarioID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRol()
    {
        return $this->hasOne(Roles::className(), ['RolID' => 'RolID']);
    }

    public static function findIdentity($id)
    {
        return static::findOne(['UsuarioID' => $id]);
    }

    /**
     * Finds user by Email
     *
     * @param string $username
     * @return static|null
     */
    public static function findByEmail($username)
    {
        return static::findOne(['UsuarioEmail' => $username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validateClave($password)
    {
        return Yii::$app->security->validatePassword($password, $this->UsuarioClave);
    }

        /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
    }

        /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
    }
}
