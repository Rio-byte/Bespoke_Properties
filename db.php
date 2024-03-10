<?php
//Database connection to Bespoke_Properties Database
$host='localhost'; 
$User='root';
$password='';
$dbName='bespoke_properties';

$conn = new mysqli($host,$User,$password,$dbName);
if(!$conn){
    return"Failed cannnot connect to Database";
}
?>