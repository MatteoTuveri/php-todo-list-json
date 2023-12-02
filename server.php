<?php
$file = file_get_contents('db.json'); //associo il file db alla variabile
$list = json_decode($file, true);//converto da json a php
//modifiche sul db in php
if(isset($_POST['newTask'])){
    $newtask = json_decode($_POST['newTask'], true);
    array_push($list, $newtask);
    file_put_contents('db.json', json_encode($list));
}
if(isset($_POST['index&value'])){
    $params = json_decode($_POST['index&value'], true);
    $list[$params[0]]['active']=$params[1];
    file_put_contents('db.json', json_encode($list));
}
header('Content-Type: application/json');
echo json_encode($list);// riconverto in json
?>