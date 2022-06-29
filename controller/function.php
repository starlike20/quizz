<?php
require_once("question.class.php");
require_once("connexion_bd.php");
require_once("quizz.question.class.php");
require_once("quizz.class.php");
require_once("userquizz.class.php");
require_once("choix.class.php");
$choix=new choix();
$quizz=new quizz();
$userquiz=new userquizz();
$quizzquestion=new quizz_question();
$question=new question();
function nombredejoueur($id){
    global $userquiz;
    return count($userquiz->getid_user($id));
}
function nombredequestion($id){
    global $quizzquestion;
    return count($quizzquestion->get_id_question($id));
}
function difficulter($id){
    global $quizz;
    $n=$quizz->get_difficulter($id);
    if($n=1){
        echo "tres facile";
    }
    elseif($n=2){
        echo "facile";
    }
    elseif($n=3){
        echo "moyen";
    }
    elseif($n=4){
        echo "difficile";
    }
    elseif($n=5){
        echo "tres difficile";
    }
    
}
function bonnereponse($id_quest){
    global $choix;
    $n=$choix->get_id_choix($id_quest);
    foreach($n as $cles=>$valeur){
        if($choix->get_bonnereponse($valeur)==1){
            $a=$valeur;
        }
    }
    return $choix->get_reponse($a);
}
function loand($i){
    return $_SESSION['i']=$i+1;
}
// if($n>=80){
//     echo "tres facile";
// }
// elseif(60<=$n<80){
//     echo "facile";
// }
// elseif(40<=$n<60){
//     echo "moyen";
// }
// elseif(20<=$n<40){
//     echo "difficile";
// }
?>