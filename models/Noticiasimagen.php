<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticiasimagen".
 *
 * @property integer $fknoticia
 * @property integer $fkimagen
 *
 * @property Noticia $fknoticia0
 * @property Archivo $fkimagen0
 */
class Noticiasimagen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticiasimagen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['fknoticia', 'fkimagen'], 'required'],
            [['fknoticia', 'fkimagen'], 'integer'],
            [['fknoticia'], 'exist', 'skipOnError' => true, 'targetClass' => Noticia::className(), 'targetAttribute' => ['fknoticia' => 'id']],
            [['fkimagen'], 'exist', 'skipOnError' => true, 'targetClass' => Archivo::className(), 'targetAttribute' => ['fkimagen' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fknoticia' => 'Fknoticia',
            'fkimagen' => 'Fkimagen',
        ];
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
    public function getFkimagen0()
    {
        return $this->hasOne(Archivo::className(), ['id' => 'fkimagen']);
    }
}
