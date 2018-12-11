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
class Distrito extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'distrito';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
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
            'nombre' => 'Distrito',
        ];
    }

}
