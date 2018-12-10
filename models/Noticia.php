<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticia".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $descripcion
 * @property string $contenido
 * @property string $portadaimg
 * @property string $fecha
 * @property integer $fkusuario
 * @property integer $fkstatus
 * @property integer $fketiqueta
 *
 * @property Comentario[] $comentarios
 * @property Usuario $fkusuario0
 * @property Status $fkstatus0
 * @property Etiquetas $fketiqueta0
 * @property Noticiasarchivo[] $noticiasarchivos
 * @property Archivo[] $fkarchivos
 * @property Noticiasimagen[] $noticiasimagens
 * @property Archivo[] $fkimagens
 */
class Noticia extends \yii\db\ActiveRecord
{
    public $arc_archivo;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion', 'contenido'], 'string'],
            [['fecha','arc_archivo'], 'safe'],
            [['arc_archivo'],'file','extensions' => 'jpg,jpeg,png,pdf'],
            [['arc_archivo'],'file','maxSize' => 1024*1024],
            [['fkusuario', 'fkstatus'], 'required'],
            [['fkusuario', 'fkstatus', 'fketiqueta'], 'integer'],
            [['titulo', 'portadaimg'], 'string', 'max' => 500],
            [['fkusuario'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['fkusuario' => 'id']],
            [['fkstatus'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['fkstatus' => 'id']],
            [['fketiqueta'], 'exist', 'skipOnError' => true, 'targetClass' => Etiquetas::className(), 'targetAttribute' => ['fketiqueta' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Título:',
            'descripcion' => 'Descripción:',
            'contenido' => 'Contenido:',
            'fecha' => 'Fecha:',
            'fkusuario' => 'Fkusuario',
            'portadaimg' => 'Imagen:',
            'fkstatus' => 'Status de nota:',
            'fketiqueta' => 'Selecciona un TAG:',
            'arc_archivo'  => 'Sube tus imágenes:',
        ];
    }
 
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentario::className(), ['fknoticia' => 'id']);
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
    public function getFkstatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'fkstatus']);
      
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFketiqueta0()
    {
        return $this->hasOne(Etiquetas::className(), ['id' => 'fketiqueta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoticiasarchivos()
    {
        return $this->hasMany(Noticiasarchivo::className(), ['fknoticia' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkarchivos()
    {
        return $this->hasMany(Archivo::className(), ['id' => 'fkarchivo'])->viaTable('noticiasarchivo', ['fknoticia' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoticiasimagens()
    {
        return $this->hasMany(Noticiasimagen::className(), ['fknoticia' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkimagens()
    {
        return $this->hasMany(Archivo::className(), ['id' => 'fkimagen'])->viaTable('noticiasimagen', ['fknoticia' => 'id']);
    }
}
