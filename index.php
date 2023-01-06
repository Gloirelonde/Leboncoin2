<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./index.js">
   
    <title>Leboncoin</title>
</head>
<body>
<div class="login-page">
  <div class="form">
        <form class="register-form">
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="password"/>
            <input type="text" placeholder="email address"/>
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" method="post">
            <input type="text" placeholder="username" name="name"/>
            <input type="password" placeholder="password" name="password"/>
            <button name="login" >login</button>
            <p class="message">Not registered? <a href="./inscription.php">Create an account</a></p>
        </form>
  </div>
</div>

<?php
        $database=new mysqli("localhost", "root", "root", "leboncoin"); //adresse serveur, nom de compte, mot de passe , nom de base de donnée
        if($database->connect_error){
            die("Erreur de connection");//permet d'arreter le programme s'il y'a une erreur de connection 
        }

        if(isset($_POST["login"])){
            $sql="SELECT username, password FROM users where username = '$' ";
            $resultat=$database->query($sql);
            extract($_POST);
            $connect=FALSE;
            foreach($resultat as $user){
            if($username == $user['name'] && $password == $user['password']){
                $connect=TRUE;
            }
        }
        if($connect === TRUE){
            header('Location: accueil.php');
        }else{
            echo "connection echouée";
        }
        $database->close();
        }
        
    
    
    
    ?>
    
</body>
</html>