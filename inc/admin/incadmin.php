<?php
if(isset($_GET['selector']))
{
  if(($_GET['selector'] >= 1)&&($_GET['selector'] <= 4)){
    $selector = $_GET['selector'];
  }
}else{
  $selector = 0;
}


?>
