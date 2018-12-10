<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clubes".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $fkdistrito
 */
class Clubes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clubes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fkdistrito'], 'integer'],
            [['nombre'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Club',
            'fkdistrito' => 'Distrito',
        ];
    }
      public function getFkdistrito0()
    {
        return $this->hasOne(Distrito::className(), ['id' => 'fkdistrito']);
    }
}
