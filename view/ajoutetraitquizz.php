<?php
    require_once("../controller/quizz.class.php");
    session_start();
    $quizz=new quizz();
    $id=$_SESSION['id'];
    $titre=$_POST['titre'];
    $difficulter=$_POST['difficulter'];
    $theme=$_POST['theme'];
    $date=date('m-d-Y');
    $quizz->ajoutquizz($titre,"2",$date,$id);
    header('location:ajoutquestion.php')
?>