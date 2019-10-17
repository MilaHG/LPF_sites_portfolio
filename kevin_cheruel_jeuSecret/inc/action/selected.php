<?php
session_start();
header('Content-Type: application/json');
include('db.php');
$sql='SELECT * FROM cases WHERE id="'.$_POST['id'].'"';
$sqlUser = 'SELECT * FROM users WHERE pseudo="'.$_SESSION['pseudo'].'"';
$sqlCase='UPDATE cases SET statut="check" WHERE id="'.$_POST['id'].'"';

$queryUser=$db->query($sqlUser);
$resultUser=$queryUser->fetchAll();
$case = intval($resultUser[0]['case_restante']);

$query = $db->query($sql);
$result = $query->fetchAll();

if($result[0]['statut'] === 'valide' && $case > 0){
    $query = $db->query($sqlCase);
    $solde = intval($resultUser[0]['solde']);
    $valeur = intval($result[0]['value']);
    $solde = $solde + $valeur;
    if($case > 0){
        if($case != 0){
            $case = $case - 1;
            $sqlRemaining = 'SELECT * FROM cases WHERE statut="valide"';
            $queryRemaining = $db->query($sqlRemaining);
            $resultRemaining = $queryRemaining->fetchAll();
            $countRemaining = count($resultRemaining);

            $sqlUserUpdate = 'UPDATE users SET case_restante="'.$case.'", solde='.$solde.' WHERE pseudo="'.$_SESSION['pseudo'].'"';
            $queryUserUpdate = $db->query($sqlUserUpdate);
    
            $data[]['case'] = $case;
            $data[]['solde'] = $solde;
            $data[]['remaining'] = $countRemaining;
    

    }
    echo json_encode($data);
        }

}
?>