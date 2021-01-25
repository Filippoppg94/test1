<?php 
/*$db = ['host'=>'localhost','username'=>'root','password'=>'','name'=>'test1'];
$con = new mysqli($db['host'],$db['username'],$db['password'],$db['name']);
if(!$con){
    echo 'problemi';
}  else {
    echo 'ok connesso';
}*/
$host='localhost';
$user='root';
$pass='';
$nome='test1';

$conness =new mysqli($host,$user,$pass,$nome);
if(!$conness){
echo 'problemi';
}