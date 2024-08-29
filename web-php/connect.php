<?php
$SEVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";

try {

    $conn = new PDO ("mysql:host=$SERVERNAME;dbname=regist_db;charset=utf8",$servername,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conner ted Successfully"

}catch(PDOExcoption $e)
echo"connected failed:".$e->getMassage();


?>
