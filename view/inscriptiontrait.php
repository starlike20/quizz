<?php
    require_once('../controller/connexion_bd.php');
    require_once('../controller/function.php');
    require_once('../controller/user.class.php');
    $speudo=$_POST['speudo'];
    $role=$_POST['role'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];
    $user=new user();
    $n=$user->n();
    $date=date("m-d-y");
    if($role=="quizzeur"){
        $requet="INSERT INTO `demande_quizzeur`(`id_user`, `date`) VALUES ('".$n."','".$date."')";
        $result= $connexion->query($requet);
    }
    $user->ajoututilisateur($speud,$mail,$password,'1','0');
?>