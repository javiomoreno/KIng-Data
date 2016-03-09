<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use app\models\TiposUsuarios;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\rbac\DbManager;

/**
 * This is the model class for table "Usuarios".
 *
 * @property integer $idUsuario
 * @property string $nombre
 * @property string $username
 * @property string $password
 * @property integer $TiposUsuarios_idTipoUsuario
 *
 * @property TiposUsuarios $tiposUsuariosIdTipoUsuario
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
            [['TiposUsuarios_idTipoUsuario', 'estado', 'sexo'], 'integer'],
            [['nombre', 'username', 'apellido'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUsuario' => 'Id Usuario',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'username' => 'Usuario',
            'password' => 'Contraseña',
            'estado' => 'Estado',
            'sexo' => 'Sexo',
            'TiposUsuarios_idTipoUsuario' => 'Tipo de Usuario',
            'tiposUsuariosIdTipoUsuario.nombre' => 'Tipo de Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiposUsuariosIdTipoUsuario()
    {
        return $this->hasOne(TiposUsuarios::className(), ['idTipoUsuario' => 'TiposUsuarios_idTipoUsuario']);
    }

    public static function findIdentity($id)
    {
        return static::findOne(['idUsuario' => $id]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
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
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public function verificarPassword(){
        return $this->password;
    }



    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
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

    public static function getListaSexos()
    {
        $opciones = [
                [
                    'idSexo'=> 1,
                    'nombre'=> 'Femenino'
                ],
                [
                    'idSexo'=> 2,
                    'nombre'=> 'Masculino'
                ]
        ];
        return ArrayHelper::map($opciones, 'idSexo', 'nombre');
    }

    public static function getListaTiposUsuarios()
    {
        $opciones = TiposUsuarios::find()->asArray()->all();
        return ArrayHelper::map($opciones, 'idTipoUsuario', 'nombre');
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new Usuarios();
            $user->TiposUsuarios_idTipoUsuario = $this->TiposUsuarios_idTipoUsuario;
            $user->username = $this->username;
            $user->nombre = $this->nombre;
            $user->setPassword($this->password);
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
