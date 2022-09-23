<?php

$servername = "192.168.100.41\\RAZUM-RUSGUARD\\RUSGUARD"; // instance и порт - необязательные параметры
// $servername = 'http://192.168.100.41/RAZUM-RUSGUARD/RUSGUARD'; // instance и порт - необязательные параметры
$connectionInfo = array( "Database"=>"RusGuardDB", "UID"=>"sa", "PWD"=>"ASDqwe123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Соединение установлено.<br />";
}else{
     echo "Соединение не установлено.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
