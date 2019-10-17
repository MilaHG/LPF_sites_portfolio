<?php


function sessionBanner(){
    
    include('db.php');
        $sql='SELECT * FROM users WHERE pseudo = "'.$_SESSION["pseudo"].'"';
        $sqlRemain = 'SELECT * FROM cases WHERE statut="valide"';
        $queryRemain = $db->query($sqlRemain);
        $countRemain = count($queryRemain->fetchAll());
        $query = $db->query($sql);
        $result = $query->fetchAll();
        $count = count($result);
        $html="<div class='headerBanner'>
        <span class='helloPseudo'>Hello ".$_SESSION['pseudo']." !</span><br>Nombre de case restantes : <input type='text' readonly value=".$result[0]['case_restante']." class='remaining'><br>
        Solde : <input type='text' readonly value=".$result[0]['solde']." class='solde'> Satoshis<br>
        Case restante en jeu : <input type='text' readonly value=".$countRemain." class='rest'>
        <right><a href='inc/action/logOut.php' class='logOut'>Log Out</a></right>
        </div>";
    echo $html;
}
function banner(){
        $html ="<div class='headerBanner'>
        <form action='inc/action/signIn.php' method='POST' id='logInForm'>
            <input type='mail' name='email' placeholder='Adress Email' class='input'>
            <input type='password' name='password' placeholder='Password' class='input'>
            <input type='submit' value='Sign In'>
        </form>
        <a href='inc/action/signUp.php' class='signUp'><button>Sign Up</button></a></div>";
    echo $html;
}
