<?php
$file = file_get_contents('db.json'); //associo il file db alla variabile
$list = json_decode($file, true);//converto da json a php
//modifiche sul db in php
header('Content-Type: application/json');
echo json_encode($list);// riconverto in json
?>