<?php

namespace app\models;

use Yii;



/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $confirmation_token
 * @property integer $status
 * @property integer $superadmin
 * @property string $created_at
 * @property string $updated_at
 * @property string $registration_ip
 * @property string $bind_to_ip
 * @property string $email
 * @property integer $email_confirmed
 * @property string $type
 *
 * @property Archivo[] $archivos
 * @property Comentario[] $comentarios
 * @property Noticia[] $noticias
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface

{
    public static function tableName()
    {
        return 'user';
    }
    // public $id;
    // public $username;
    // public $password;
    // public $authKey;
    // public $accessToken;

    // private static $users = [
    //     '100' => [
    //     'id' => '100',
    //     'username' => 'admin',
    //     'password' => 'admin',
    //     'authKey' => 'test100key',
    //     'accessToken' => '100-token',
    //     ],
    //     '101' => [
    //         'id' => '101',
    //         'username' => 'demo',
    //         'password' => 'demo',
    //         'authKey' => 'test101key',
    //         'accessToken' => '101-token',
    //     ],
    // ];
    // 
    /**
     * @inheritdoc
     */
    /*public static function tableName()
    {
        return 'username';
    }*/

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password_hash'], 'required'],
            [['status', 'superadmin', 'email_confirmed', 'fkclub', 'fkdistrito'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['type', 'nombre', 'apaterno', 'amaterno', 'fkclase'], 'string'],
            [['username', 'password_hash', 'confirmation_token', 'bind_to_ip'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['registration_ip'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'username' => 'Nombre de Usuario',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Contraseña',
            'confirmation_token' => 'Confirmation Token',
            'status' => 'Estado',
            'superadmin' => 'Superadmin',
            'created_at' => 'Fecha de creación',
            'updated_at' => 'Actualización',
            'registration_ip' => 'Registration Ip',
            'bind_to_ip' => 'Bind To Ip',
            'email' => 'Email',
            'email_confirmed' => 'Email Confirmado',
            'type' => 'Tipo',
            'fkclub'=> 'Club',
            'fkclase'=> 'Clase',
            'fkdistrito'=> 'Distrito',
            'apaterno' => 'Apellido Paterno',
            'amaterno' => 'Apellido Materno',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArchivos()
    {
        return $this->hasMany(Archivo::className(), ['fkusuario' => 'id']);
    }

     public function getFkclub0()
    {
        return $this->hasOne(Clubes::className(), ['id' => 'fkclub']);
      
    }
    public function getFkdistrito0()
    {
        return $this->hasOne(Distrito::className(), ['id' => 'fkdistrito']);
      
    }
    public function getFkclase0()
    {
        return $this->hasOne(Clases::className(), ['id' => 'fkclase']);
      
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentario::className(), ['fkusuario' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoticias()
    {
        return $this->hasMany(Noticia::className(), ['fkusuario' => 'id']);
    }

    public function getAuthKey() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function validateAuthKey($authKey) {
        
    }

    public static function findIdentity($id) {
        return User::findOne($id);  
    }

    public static function findIdentityByAccessToken($token, $type = null) 
    {
    foreach (selft::$users as $user) {
        if ($user['accessToken'] === $token) {
            return new static($user);
        }
    }
        return null;
    }

    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }
        return null;
    }
    
    public static function findByAmaterno($amaterno)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['amaterno'], $amaterno) === 0) {
                return new static($user);
            }
        }
        return null;
    }

    public static function findByFkdistrito0($fkdistrito0)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['fkdistrito0'], $fkdistrito0) === 0) {
                return new static($user);
            }
        }
        return null;
    }

    public static function findByEmail($email) {
        return User::find()->where(['email' => $email])->one();
    }

    public function beforeSave($insert) {
    if ($insert) {
        $this->password_hash = Yii::$app->getSecurity()->generatePasswordHash($this->password_hash);
        }
    return parent::beforeSave($insert);
    }

    public function validatePassword($password) {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password_hash);
    }
  
}
