<?php
include('./connection.php');

$passCrypt = password_hash($pass,PASSWORD_DEFAULT);

$sql_code = "INSERT INTO userregistration (fullName,email,country,pass,term) VALUES ('$name','$email','$country','$passCrypt','$terms')";

$sendingData = $mysqli->query($sql_code) or die($mysqli->error);

if($sendingData){
    header('Location: ../../public/pages/load.html');
    
}else{
    echo "Deu Erro".$mysqli->error;
}
?>