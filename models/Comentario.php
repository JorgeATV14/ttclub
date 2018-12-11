<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comentario".
 *
 * @property integer $id
 * @property string $contenido
 * @property string $respuesta
 * @property integer $fkusuario
 * @property integer $fknoticia
 * @property integer $fkstatus
 * @property string $fecha
 *
 * @property User $fkusuario0
 * @property Noticia $fknoticia0
 * @property Status $fkstatus0
 */
class Comentario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comentario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contenido', 'respuesta'], 'string'],
            [['fkusuario', 'fknoticia', 'fkstatus'], 'required'],
            [['fkusuario', 'fknoticia', 'fkstatus'], 'integer'],
            [['fecha'], 'safe'],
            [['fkusuario'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['fkusuario' => 'id']],
            [['fknoticia'], 'exist', 'skipOnError' => true, 'targetClass' => Noticia::className(), 'targetAttribute' => ['fknoticia' => 'id']],
            [['fkstatus'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['fkstatus' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contenido' => 'Contenido',
            'respuesta' => 'Respuesta',
            'fkusuario' => 'Fkusuario',
            'fknoticia' => 'Fknoticia',
            'fkstatus' => 'Fkstatus',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkusuario0()
    {
        return $this->hasOne(User::className(), ['id' => 'fkusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFknoticia0()
    {
        return $this->hasOne(Noticia::className(), ['id' => 'fknoticia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkstatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'fkstatus']);
    }
}
