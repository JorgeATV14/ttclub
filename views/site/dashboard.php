<?php
use app\components\widgets\krnpanel\Krnpanel;


$this->title = 'Dashboard';
?>
<br/>
<body style="background:url('/img/fondocontacto2.jpg') ; background-size:1654px 872px;
">

					<div class="container-fluid">
							
					</div>
				</div>
				
<footer id="footer">

<div class="container-fluid">
						<div class="footer-ribbon">
                          <h4><strong>BIENVENIDO A TU DASHBOARD</strong></h4>                             
                       
                       <br>
                        </div>
                    </div>
            </div>	
            </footer>
	<br>	
<body>
				
<?php 

echo KrnPanel::widget([ 'buttons'=>$button]);
