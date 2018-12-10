<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticiasarchivo".
 *
 * @property integer $fknoticia
 * @property integer $fkarchivo
 *
 * @property Noticia $fknoticia0
 * @property Archivo $fkarchivo0
 */
class Noticiasarchivo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticiasarchivo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fknoticia', 'fkarchivo'], 'required'],
            [['fknoticia', 'fkarchivo'], 'integer'],
            [['fknoticia'], 'exist', 'skipOnError' => true, 'targetClass' => Noticia::className(), 'targetAttribute' => ['fknoticia' => 'id']],
            [['fkarchivo'], 'exist', 'skipOnError' => true, 'targetClass' => Archivo::className(), 'targetAttribute' => ['fkarchivo' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fknoticia' => 'Fknoticia',
            'fkarchivo' => 'Fkarchivo',
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
    public function getFkarchivo0()
    {
        return $this->hasOne(Archivo::className(), ['id' => 'fkarchivo']);
    }
}
