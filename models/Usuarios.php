<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use app\models\Roles;
use yii\helpers\ArrayHelper;

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
            [['Usuariocol'], 'string', 'max' => 45],

            ['UsuarioEmail', 'filter', 'filter' => 'trim'],
            ['UsuarioEmail', 'email'],
            ['UsuarioEmail', 'unique', 'targetClass' => '\app\models\Usuarios', 'message' => 'Email ya Registrado.'],

            ['UsuarioClave', 'string', 'min' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UsuarioID' => 'Usuario ID',
            'UsuarioNombre' => 'Nombre',
            'UsuarioApellido' => 'Apellido',
            'UsuarioEmail' => 'Email',
            'UsuarioAlias' => 'Alias',
            'UsuarioTelefono' => 'Teléfono',
            'UsuarioClave' => 'Contraseña',
            'UsuarioDireccion' => 'Direccion',
            'Usuariocol' => 'Usuariocol',
            'RolID' => 'Cargo',
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
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->UsuarioClave);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setUsuarioClave($password)
    {
        $this->UsuarioClave = Yii::$app->security->generatePasswordHash($password);
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

    public static function getListaRoles()
    {
        $opciones = Roles::find()->asArray()->all();
        return ArrayHelper::map($opciones, 'RolID', 'RolNombre');
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function registrarUsuarios()
    {
        if ($this->validate()) {
            $user = new Usuarios();
            $user->UsuarioNombre = $this->UsuarioNombre;
            $user->UsuarioApellido = $this->UsuarioApellido;
            $user->UsuarioAlias = $this->UsuarioAlias;
            $user->UsuarioEmail = $this->UsuarioEmail;
            $user->UsuarioTelefono = $this->UsuarioTelefono;
            $user->setUsuarioClave($this->UsuarioClave);
            $user->UsuarioDireccion = $this->UsuarioDireccion;
            $user->Usuariocol = $this->Usuariocol;
            $user->RolID = $this->RolID;
            if ($user->save()) {
                return $user;
            }
        }
        return null;
    }

}
