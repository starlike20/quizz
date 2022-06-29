<!DOCTYPE html>
<html lang="fr">
    <?php require_once("../controller/quizz.class.php");
    require_once("../controller/user.class.php");
    require_once("../controller/function.php");
    require_once("../controller/quizz.question.class.php");
    require_once("../controller/userquizz.class.php");
    require_once("../controller/quizz-theme.php");
    require_once("../controller/theme.class.php");
    session_start();
    unset($_SESSION['i']);
    $theme=new theme();
    $quizztheme=new quizztheme();
    $userquiz=new userquizz();
    $quizzquestion=new quizz_question();
    $quizz=new quizz();
    $user=new user;
    $n=$quizz->n();
    $i=1;
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" href="../public/css/presentationquizz.css">
    <title>listing</title>
</head>
<body>
    <div class="bodd">
        <div id="bodd-1">

        </div>
    </div>
    <div id="bodd">
        <header>
            <?php $id=$_GET['id']?>
            <span>Quizzeo</span>
            <span>listing</span>
            <div>
                <span>clasement</span>
                <span>xp<span>
            </div>
        </header>
        <div id="bod">
            <img>
            <span id="titre"><?php echo $quizz->get_titre($id)?></span>
            <div id="tritresecond"><span>themes:<?php 
            $n=$quizztheme->get_id_theme($id);
            foreach($n as $cles=>$valeur){
                echo $theme->get_nom($valeur)." ";
            }
            ?>
            </span>
            </div>
            <div id="titre3">creé par:<?php echo $user->getspeudo($quizz->get_id_user($id))?>  ,le   ,<?php echo $quizz->get_date_creation($id)?></div>
            <div><span id="titre4"><?php echo nombredequestion($id)?>questions,<?php echo nombredejoueur($id) ?>joueurs</span></div>
            <span id="titre5">difficulté  :<?php difficulter($id) ?></span>
            <a id="envoie" href="questionaire.php?id=<?php echo $id?>">commencer</a>
        </div>
        <footer>

        </footer>
    </div>
<body>
    <style>
        .bodd{
            position: absolute;
            top:0px;
            left: 0pX;
            width: 100%;
            height: 100%;
            background-image: url("../public/image/les7merveille.jpg") ;
        }
        #bodd-1{
            position: absolute;
            z-index: 2;
            width: 100%;
            height: 100%;
            background: linear-gradient(2deg, rgba(15, 12, 12, 0.99),rgba(60, 47, 47, 0.80), rgb(0, 0, 0));
            background: c;
        }
        #bodd{
            position: absolute;
            z-index: 9;
            width: 99%;
            height: 100%;
        }
    </style>
</html>