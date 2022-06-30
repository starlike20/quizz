<?php
require_once("question.class.php");
require_once("connexion_bd.php");
require_once("quizz.question.class.php");
require_once("quizz.class.php");
require_once("userquizz.class.php");
require_once("choix.class.php");
require_once("user.class.php");
$user=new user();
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
function appreciation($n,$i){
    $n=($n/$i)*100;
    if($n>=80){
        return "excelent";
    }
    elseif(60<$n && $n<81){
        return "tres bien";
    }
    elseif(40<$n && $n<61){
        return "passable";
    }
    elseif(20<$n && $n<41){
        return "insuffisant";
    }
    else{
        return "null";
    }
}
function verification(){
    global $user;
    if(!empty($_POST) && isset($_POST)){
        $mail=$_POST['mail'];
        $mdp=$_POST['password'];
        $n=$user->n();
        $t[0]=0; 
        $t[1]=0;
        foreach($n as $cles=>$valeur){
            if($mail==$user->getemail($valeur)){
                $t[0]=1;
                if($mdp==$user->getpassword($valeur)){
                    $t[1]=1;
                    $t[2]=$valeur;
                }
            }
        }
        return $t;
    }
    else{
        return $t=[0,0];
    }
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