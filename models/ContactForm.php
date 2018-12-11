<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
            'name' => 'Nombre',
            'subject' => 'Asunto',
            'body' => 'Describa su asunto',
            'verifyCode' => 'Código de verificacion'
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        // $content="<p>Email:". $this->email ."</p>";//Email del usuario
        // $content .= "<p>Nombre: ". $this->name ."</p>";//Nombre
        // $content .= "<p>Asunto: ". $this->subject . "</p>"; //Asunto
        // $content .= "<p>Body: " . $this->body ."</p>";//Cuerpo del email
        // if (Yii::$app->mailer->compose("layouts/html",["content"=>$content])
        //     ->setTo($email)
        //     ->setFrom([$this->email => $this->name])
        //     ->setSubject($this->subject)
        //     ->setTextBody($this->body)
        //     ->send()){

        //     return true;
        // }
        // return false;
        if($this->validate()){
            $content="<p>Email:". $this->email ."</p>";//Email del usuario
            $content .= "<p>Nombre: ". $this->name ."</p>";//Nombre
            $content .= "<p>Asunto: ". $this->subject . "</p>"; //Asunto
            $content .= "<p>Contenido: " . $this->body ."</p>";//Cuerpo del email
            Yii::$app->mailer->compose("layouts/html",["content"=>$content])
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();
            return true;
        }
        return false;
    }

}
