<?php 
require_once("connexion_bd.php");
class quizztheme {
    public function __construct(){
    }
    //la table choix est defini par sont id ,la reponse ,par la isbonnereponse,et par l'id de la question
    //1- dans un premier temps on vas selectionner les different element en fonction de l'id 
    public function get_id_theme($i){    //avoir la reponse en fonction de l'id
        global $connexion;
        $requet="SELECT`id_theme` FROM `quizz_theme`Where `id_quizz`=".$i."";
        $result= $connexion->query($requet);
        $i=0;
        while($a=$result->fetch_array(MYSQLI_ASSOC)){
           $t[$i]=$a['id_theme'];
           $i++;
        }
        return $t;
    }
    public function get_id_quizz($i){    //avoir la reponse en fonction de l'id
        global $connexion;
        $requet="SELECT`id_quizz` FROM `quizz_theme`Where `id_theme`=".$i."";
        $result= $connexion->query($requet);
        $i=0;
        while($a=$result->fetch_array(MYSQLI_ASSOC)){
            $t=$a['id_img'];
            $i++;
        }
        return $t;
    }
    public function ajoutequizztheme($idq,$idtheme){//ajouter un medecin
        global $connexion;
        $requet="INSERT INTO `quizz_theme`(`id_quizz`,`id_theme`)
        VALUES('".$idq."','".$$idtheme."')";
        $result= $connexion->query($requet);
    }
    public function n(){
        global $connexion;
        $requet="SELECT* FROM `quizz_theme";
        $result= $connexion->query($requet);
        $i=0;
        while($a=$result->fetch_array(MYSQLI_ASSOC)){
            $i++;
        }
        return $i;
    }
}
?>