<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "archivo".
 *
 * @property integer $id
 * @property integer $fkusuario
 * @property string $nombre
 * @property string $tipo
 * @property string $tamano
 * @property string $descripcion
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property string $titulo
 * @property string $ruta
 * @property string $descarga
 *
 * @property User $fkusuario0
 * @property Noticiasarchivo[] $noticiasarchivos
 * @property Noticia[] $fknoticias
 * @property Noticiasimagen[] $noticiasimagens
 * @property Noticia[] $fknoticias0
 */
class Archivo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'archivo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fkusuario', 'nombre', 'descarga'], 'required'],
            [['fkusuario', 'tamano', 'descarga'], 'integer'],
            [['descripcion'], 'string'],
            [['fecha_creacion', 'fecha_actualizacion'], 'safe'],
            [['nombre', 'tipo'], 'string', 'max' => 252],
            [['titulo', 'ruta'], 'string', 'max' => 255],
            [['fkusuario'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['fkusuario' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fkusuario' => 'Fkusuario',
            'nombre' => 'Nombre',
            'tipo' => 'Tipo',
            'tamano' => 'Tamano',
            'descripcion' => 'Descripcion',
            'fecha_creacion' => 'Fecha Creacion',
            'fecha_actualizacion' => 'Fecha Actualizacion',
            'titulo' => 'Titulo',
            'ruta' => 'Ruta',
            'descarga' => 'Descarga',
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
    public function getNoticiasarchivos()
    {
        return $this->hasMany(Noticiasarchivo::className(), ['fkarchivo' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFknoticias()
    {
        return $this->hasMany(Noticia::className(), ['id' => 'fknoticia'])->viaTable('noticiasarchivo', ['fkarchivo' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoticiasimagens()
    {
        return $this->hasMany(Noticiasimagen::className(), ['fkimagen' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFknoticias0()
    {
        return $this->hasMany(Noticia::className(), ['id' => 'fknoticia'])->viaTable('noticiasimagen', ['fkimagen' => 'id']);
    }
}
