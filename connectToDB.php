<?php
function doLogin(){
    $dbName = "henry_shubha"; 
    $serverName = "localhost"; 
    $serverUser = "root"; 
    $serverPassword = ""; 
    $conn = new mysqli($serverName, $serverUser, $serverPassword, $dbName); 
    if($conn -> connect_error){
        die("Connection error to $dbName, " . $conn->connect_error);
    }
}
?>