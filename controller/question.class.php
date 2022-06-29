<?php
    require_once('connexion_bd.php');
    class question{
        public function __construct(){
        }
        //la table choix est defini par sont id ,intituléQuestion ,difficulter,et date de creation de la question
        //1- dans un premier temps on vas selectionner les different element en fonction de l'id de la question
        public function get_intituléQuestion($i){
            global $connexion;
            $requet="SELECT`intituléQuestion` FROM `question`Where `id_question`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['intituléQuestion'];
            }
            return $t;
        }
        public function get_difficulter($i){
            global $connexion;
            $requet="SELECT`difficulter` FROM `question`Where `id_question`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['difficulter'];
            }
            return $t;
        }
        public function getdate_creation($i){
            global $connexion;
            $requet="SELECT`date_creation` FROM `question`Where `id_question`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['date_creation'];
            }
            return $t;
        }
        public function get_commentaire($i){
            global $connexion;
            $requet="SELECT`commentaire` FROM `question`Where `id_question`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['commentaire'];
            }
            return $t;
        }
        //2-dans un second temps on va supprimer en fonction del'id de la questio
        public function supprime_question($i){
            global $connexion;
            $requet="DELETE FROM `question` WHERE `id_question`='".$i."'";;
            $result=$connexion->query($requet);
        }
        //3-dans un troisiemme temps on vas modifier en fonction de l'id de la question
        public function modifie_question($i,$intituléQuestion,$difficulter,$date_creation){
            global $connexion;
            if($intituléQuestion!=null){
                $requet="UPDATE `question` set `intituléQuestion`='".$intituléQuestion."' where `id_question`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($difficulter!=null){
                $requet="UPDATE `question` set `difficulter`='".$difficulter."' where `id_question`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($date_creation!=null){
                $requet="UPDATE `question` set `date_creation`='".$date_creation."' where `id_question`='".$i."' ";
                $result= $connexion->query($requet);
            }
        }
        //6-maintenant retourner la liste des id des question
        public function n(){
            global $connexion;
            $requet="SELECT * FROM `question`";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_question'];
                $i++;
            }
            return $t;
        }
    }
?>