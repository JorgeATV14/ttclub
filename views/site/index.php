<?php
use app\components\widgets\krnpanel\Krnpanel;


$this->title = 'Sistema Todo Tu Club';
?>
<br/>
<?php 
  
echo KrnPanel::widget([ 'buttons'=>$botones]);

