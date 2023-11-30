<?php
    session_start();
    
    $image = '<img src="../../public/assets/images/triangle.png" alt="" class="imgBackValidate">';
    $name = strtoupper($_POST['fullName']);
    $email = strtoupper($_POST['email']);
    $country = strtoupper($_POST['country']);
    $pass = $_POST['pass'];
    $term = $_POST['checkboxTerm'];

    if(empty($name) || strlen($name) < 3) {
        $emptyEmail =  '<a href = "../../public/pages/registration.html" class="btnSubmit">CORRIJA SEU NOME NO FORMULÁRIO</a>';
    }elseif(empty($email)  || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emptyEmail =  '<a href = "../../public/pages/registration.html" class="btnSubmit">CORRIJA SEU E-MAIL NO FORMULÁRIO</a>';
    }elseif(empty($country)) {
        $emptyCountry =  '<a href = "../../public/pages/registration.html" class="btnSubmit">CORRIJA SEU PAIS NO FORMULÁRIO</a>'; 
    }elseif(empty($term)){
        $emptyTerm =  '<a href = "../../public/pages/registration.html" class="btnSubmit">ACEITE OS TERMOS DE CADASTRO</a>';
    }else{
        if( $_SERVER['REQUEST_METHOD']=='POST' )
        {
            $request = md5( implode( $_POST ) );

            if( isset( $_SESSION['last_request'] ) && $_SESSION['last_request']== $request )
            {
                die();
            }
            else
            {   
                $_SESSION['last_request']  = $request;
                $terms = true;
                include('./sendingController.php');
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/triangle.png" type="image/x-icon">
    <link rel="stylesheet" href="../../public/assets/css/global.css">
    <link rel="stylesheet" href="../../public/assets/css/oppss.css">
    <title>OPPS...</title>
</head>
<body>
    <section class="containerButtonValidate">
        
        <?php 
        if (isset($emptyFullName)) {
            echo $image;
            echo $emptyFullName;
        }elseif(isset($emptyEmail)){
            echo $image;
            echo $emptyEmail;
        }elseif(isset($emptyCountry)){
            echo $image;
            echo $emptyCountry;
        }elseif(isset($emptyTerm)){
            echo $image;
            echo $emptyTerm;
        }
        ?>
    </section>
</body>
</html>
