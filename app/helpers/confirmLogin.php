<?php

include('./connection.php');

$emailLogin = strtoupper($_POST['loginemail']);
$passLogin = strtoupper($_POST['loginpassword']);

$sql_login = "SELECT * FROM userregistration WHERE email = '$emailLogin' LIMIT 1";
 
$sql_exelogin = $mysqli->query($sql_login) or die($myslq->error);

$returnlogin =  $sql_exelogin->fetch_assoc();

if(password_verify($passLogin, $returnlogin['pass'])){
    header("Location: ../../public/pages/loginTrue.html");
}else{
    echo "ERROR";
}
?>