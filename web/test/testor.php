<?php
include_once('../model/model.php');
//
$oDl = new DataLink();
//
$sQuery = "select * from auteur where nationalite = :nationalite";
$aRes = $oDl->getResultSet($sQuery, [':nationalite' => 'Russe']);
//
var_dump($aRes);
//

 ?>
