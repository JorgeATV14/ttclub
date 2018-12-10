<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dashboard".
 *
 * @property integer $id
 * @property integer $orden
 * @property string $nombre
 * @property string $url
 * @property string $clase
 * @property string $status
 */
class Dashboard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dashboard';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orden', 'nombre', 'url', 'clase', 'status'], 'required'],
            [['orden'], 'integer'],
            [['nombre', 'url', 'clase'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orden' => 'Orden',
            'nombre' => 'Nombre',
            'url' => 'Url',
            'clase' => 'Clase',
            'status' => 'Status',
        ];
    }
}
