<?php 
require_once("connexion_bd.php");
class theme {
    public function __construct(){
    }
    //la table choix est defini par sont id ,la reponse ,par la isbonnereponse,et par l'id de la question
    //1- dans un premier temps on vas selectionner les different element en fonction de l'id 
    public function get_nom($i){    //avoir la reponse en fonction de l'id
        global $connexion;
        $requet="SELECT`nom` FROM `theme`Where `id`=".$i."";
        $result= $connexion->query($requet);
        while($a=$result->fetch_array(MYSQLI_ASSOC)){
            $t=$a['nom'];
        }
        return $t;
    }
    public function get_idimg($i){    //avoir la reponse en fonction de l'id
        global $connexion;
        $requet="SELECT`id_img` FROM `theme`Where `id`=".$i."";
        $result= $connexion->query($requet);
        while($a=$result->fetch_array(MYSQLI_ASSOC)){
            $t=$a['id_img'];
        }
        return $t;
    }
    public function ajoutemedecin($nom,$idimg){//ajouter un medecin
        global $connexion;
        $requet="INSERT INTO `theme`(`nom`, `id_img`)
        VALUES('".$nom."','".$$idimg."')";
        $result= $connexion->query($requet);
    }
    public function n(){
        global $connexion;
        $requet="SELECT* FROM `theme`";
        $result= $connexion->query($requet);
        $i=0;
        while($a=$result->fetch_array(MYSQLI_ASSOC)){
            $t=$a['id'];
            $i++;
        }
        return $t;
    }
}
?>