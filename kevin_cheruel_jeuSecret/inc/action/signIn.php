<?php
include('db.php');
if(isset($_POST) && !empty($_POST) && empty($_SESSION['pseudo']) && !isset($_SESSION)){
    
    $email = htmlspecialchars(addslashes($_POST['email']));
    $password = htmlspecialchars(addslashes(md5($_POST['password'])));
    
    $sql="SELECT * FROM users WHERE email ='".$email."' AND password ='" .$password."'";
    $query = $db->query($sql);
    $result = $query->fetchAll();
    if(count($result) > 0){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
            $_SESSION['pseudo'] = $result[0]['pseudo'];       
        }
        //header('Location:../../index.php');
    }else{
        echo 'Nope';
    }
    header('Location:../../index.php');
}