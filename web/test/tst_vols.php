<?php
include_once('../model/model.php');
//
//-------------------------------
//-------------------------------
echo '------------ test getVols<br>';
$aRes = getVols();
var_dump($aRes);
//-------------------------------
echo '------------ test getVolGs<br>';
$aRes = getVolGs();
var_dump($aRes);

?>
