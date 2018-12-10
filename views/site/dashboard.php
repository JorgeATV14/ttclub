<?php
use app\components\widgets\krnpanel\Krnpanel;


$this->title = 'Dashboard';
?>
<br/>
<div class="row">
							<div class="col-md-12">
								<h1>Bienvenido al Dashboard</h1>
							</div>
						</div>
					</div>
<?php 
  
echo KrnPanel::widget([ 'buttons'=>$button]);
