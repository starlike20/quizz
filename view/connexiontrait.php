<?php
require_once('../controller/function.php');
require_once('../controller/connexion_bd.php');
    session_start();
    $mail=$_POST['mail'];
    $mdp=$_POST['password'];
    $_SESSION['id']=verification()[2];
    $requet="UPDATE `user` SET `isconnect`='1' WHERE `id_user`='".verification()[2]."'";
    $result= $connexion->query($requet);
    header('location:listing.php');
 ?>