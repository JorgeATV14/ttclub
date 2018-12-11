<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clases".
 *
 * @property integer $id
 * @property string $nombre
 */
class Clases extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clases';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'nombre' => 'Clase',
        ];
    }
}
