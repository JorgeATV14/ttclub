
<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Clubes;
use app\models\Distrito;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = "Mi Cuenta";
$this->params['breadcrumbs'][] = ['label' => 'Mi Cuenta', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Yii::$app->user->identity->username?>
<?$this->title = $model->id;?>
<br>
 
  <h1><?= Html::encode($this->title) ?></h1>


 <div class="control-group form-group">
    	                        <div class="controls">
    	                        	<br >
    	                            <label>Información básica</label>
    	                            <span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="text" class="form-control" id="txtName" placeholder="<?= Yii::$app->user->identity->username?>
" required data-validation-required-message="<?= Yii::$app->user->identity->username?>
">
    	                            </span>
    	                            <br >
    	                            <span id="alertSurname" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="text" class="form-control" id="txtSurname" placeholder="Introduzca sus apellidos" required data-validation-required-message="Por favor introduzca sus apellidos.">
    	                            </span>
    	                            <br >
    	                            <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="text" class="form-control" id="txtQualification" placeholder="Introduzca su título" required data-validation-required-message="Por favor introduzca su título.">
    	                            </span>
    	                            <br >
    	                            <span id="alertEmail" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="email" class="form-control" id="txtEmail" placeholder="Introduzca su email" required data-validation-required-message="Por favor introduzca su email.">
    	                            </span>
    	                            <p class="help-block"></p>
    	                        </div>
    	                    </div>
    	                    <div class="control-group form-group">
    	                        <div class="controls">
    	                            <label>Biografía:</label>
    	                            <span id="alertBiography" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
    		                            <textarea rows="6" cols="30" class="form-control" id="txtBiography" required maxlength="999" style="resize:none" 
    		                            data-validation-required-message="Por favor introduzca su biografía deseada."></textarea>
    		                        </span>
    		                        <br >
    		                        <span id="alertSelectLanguage" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
    		                            <select class="form-control" id="selectLanguage" title="Seleccione su idioma">
    		                            	<option class="bs-title-option" value="" disabled selected>Elija un idioma</option>
    		                            	<option>Alemán</option>
    		                            	<option>Castellano</option>
    		                            	<option>Catalán</option>
		                            	   	<option>Francés</option>
    		                            	<option>Inglés</option>
    		                            	<option>Portugués</option>
    		                            </select>
    		                        </span>
                                    <br >
    	                        </div>
                        	</div>
                    </div>
                </div>
                <!-- Fin del div central parte de formulario información básica -->