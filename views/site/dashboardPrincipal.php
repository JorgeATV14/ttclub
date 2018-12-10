<?php //Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/googleanalytics.js'); ?>
<?php
use yii\helpers\Html;
/*$usuario = Usuario::model()->find('id=:id', [':id' => Yii::app()->user->id]);
$username = $usuario->username;
$departamento = $usuario->usuarioAdscripcion->nombre;
$nombre = $usuario->fkpersonal0->nombre . ' ' . $usuario->fkpersonal0->appat . ' ' . $usuario->fkpersonal0->apmat;*/
$esp_ocupados = 0;
$esp_generados = 0;
$espacios = array();

?>
<div class="wraper">
    <div class="top_title">
        <div class="wraper">
            <div>
                <h2>Bienvenido al Dashboard</h2>
            </div>

            <div class="info-user" align="right">
                <p><?= $nombre; ?></p>
                <p><?= $departamento; ?></p>
                <p>Ultima Sesión: <?php//= Yii::app()->user->fecha_logueo; ?></p>
            </div>

        </div>  
    </div>
</div>
<!-- /top_title -->
<?php //$this->widget('ext.dashboard.Dashboard'); ?>
<div class="wraper">
    <div class="contenedor">
        <?php 
            $orden=explode(",",$usuario->ordenMenu);
            $listado=array(array('0','nota.MisNotas','/nota/MisNotas','nota-nvo','Mis Notas','',''),
                           array('1','adscripcion.index','/adscripcion/index','adscripcion-nvo','Adscripción',''),
                           array('2','archivo.index','/archivo/index','archivo-nvo','Archivos','',''),
                           array('3','aviso.MisAvisos','/aviso/MisAvisos/','aviso-nvo','Mis Avisos','',''),
                           array('4','seccion.index','/seccion/index','seccion-nvo','Secciones','',''),
                           array('5','pnpc.*','/pnpc/index/','pnpc-nvo','Archivos PNPC 2014','',''),
                           array('6','convocatoria.MisConvocatorias','/convocatoria/MisConvocatorias','convocatoria-nvo','Mis Convocatorias','',''),
                           array('7','comentario.index','/calendar/calendar','agenda-nvo','Mi agenda','',''),
                           array('8','comentario.index','/comentario/index','comentario-nvo','Comentarios','',''),
                           array('9','banner.*','/banner/index','slider-nvo','Sliders','',''),
                           array('10','rights','/rights','rbac-nvo','Control Rbac','',''),
                           array('11','usuario.index','/usuario/index','usuario-nvo','Usuarios','',''),
                           array('12','revista.index','/revista/index','revista-nvo','Revistas','',''),
                           array('13','Usuario.ViewDashboardPrincipal','/listacorreo/suscribirValidar','suscripcion','Mis Suscripciones','8',''),
                           array('14','Gallery.admin','/gallery/admin','Galeria','Galerias','',''),
                           array('15','Programa.MisProgramas','/programa/MisProgramas','','Mis Programas','',''),
                           array('','','','','','',''),
                           array('','','','','','',''),
                           array('','','','','','',''),
                           array('','','','','','',''),
                           array('','','','','','',''),
                           array('','','','','','',''),
                           array('','','','','','',''),
                           array('','','','','','',''),
                           array('','','','','','',''),
                           array('','','','','','','')
                          );
            
         foreach($orden as $o)
         {  //if(isset($listado[$o]) && $listado[$o][0]!=''){
               $esp_generados++; array_push($espacios, $esp_generados); if (($listado[$o][1]!=''?Yii::app()->user->checkAccess($listado[$o][1]):true) && (($listado[$o][5]!=''?Yii::app()->user->getState('tipo') == $listado[$o][5]:true) || ($listado[$o][5]!=''?Yii::app()->user->getState('tipo') == $listado[$o][6]:true))) { ?>
               <div  align="center" id=<?=$listado[$o][0]?>><?= Html::a('', $listado[$o][2], array('class' => 'boton_prototype_3 plantilla plantilla_hover '.$listado[$o][3].' containerss')); ?><br><h4><?=$listado[$o][4]?></h4></div>            
               <?php $esp_ocupados++; 
               //}  
            }
         }
         ?> 
        
        
        <?php 
        
        //calculamos una aproximacion a los espacios
        //necesarios para alinear los items
        
        $operacion = $esp_generados-(9 + $espacios[$esp_ocupados-1]);
        
        if($operacion<0){
            $operacion = 0;
        }
        
        //Rellenamos los espacios vacios para alinear
        for($j=0;$j<=$operacion;$j++):
            echo "<div></div>";
        endfor;
        ?>
    </div>
</div>

<hr>
<?php/*
if (Yii::app()->user->hasFlash('exitoActualizarPerfil')) {
    $this->widget('ext.notificaciones.Notificaciones', array(
        'tipo' => 'success',
        'mensaje' => 'Tu perfil se ha actualizado.',
    ));
    Yii::app()->user->setFlash('', "");
} else if (Yii::app()->user->hasFlash('errorActualizarPerfil')) {

    $this->widget('ext.notificaciones.Notificaciones', array(
        'tipo' => 'error',
        'mensaje' => 'Ha ocurrido un error al actualizar tu perfil.',
    ));
    Yii::app()->user->setFlash('', "");
} else if (Yii::app()->user->hasFlash('exitoActualizarSuscripcion')) {

    $this->widget('ext.notificaciones.Notificaciones', array(
        'tipo' => 'success',
        'mensaje' => 'Suscripciones actualizadas.',
    ));
    Yii::app()->user->setFlash('', "");
}*/
?>  