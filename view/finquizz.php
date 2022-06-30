<!DOCTYPE html>
<html lang="fr">
    <?php require_once("../controller/quizz.class.php");
        require_once("../controller/quizz.question.class.php");
        require_once("../controller/function.php");
        session_start();
        unset($_SESSION['i']);
    $quizzquestion=new quizz_question();
    $quizz=new quizz();
    $n=$quizz->n();
    $i=1;
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" href="../public/css/fin.css">
    <title>fin</title>
</head>
<body>
    <header>
        <?php $id=$_GET['id'];
        $c=$_GET['c'];
        $i=$_GET['i'];
        $n=$quizzquestion->get_id_question($id);
        $a=count($n);
        ?>
        <span>Quizzeo</span>
        <span>listing</span>
        <div>
            <span>clasement</span>
            <span>xp<span>
        </div>
    </header>
    <video autoplay loop="1">
        <source src="../public/image/felicitation.mp4"
            type="video/mp4">
    </video>
    <div id="bod">
        <div id="appreciation">
            <span><?php echo appreciation($c,$a)?></span>
        </div>
        <div id="score"><span>votre score est:<?php echo $c?><span></div>
        <div id="classement">
            <span>tableau des classement</span>
        <div>
    <div>
</body>
</html>