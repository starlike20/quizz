<?php
    require_once('connexion_bd.php');
    class quizz{
        public function __construct(){
        }
        public function get_titre($i){
            global $connexion;
            $requet="SELECT`titre` FROM `quizzs`Where `id_quizz`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['titre'];
            }
            return $t;
        }
        public function get_difficulter($i){
            global $connexion;
            $requet="SELECT`difficulter` FROM `quizzs`Where `id_quizz`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['difficulter'];
            }
            return $t;
        }
        public function get_date_creation($i){
            global $connexion;
            $requet="SELECT`date_creation` FROM `quizzs`Where `id_quizz`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['date_creation'];
            }
            return $t;
        }
        public function get_id_user($i){
            global $connexion;
            $requet="SELECT`id_user` FROM `quizzs`Where `id_quizz`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['id_user'];
            }
            return $t;
        }
        public function get_quizz($i){
            global $connexion;
            $requet="SELECT`id_quizz` FROM `quizzs`Where `id_user`=".$i."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_quizz'];
                $i++;
            }
            return $t;
        }
        public function ajoutquizz($titre,$difficulter,$datedecreation,$id_user){//ajouter un medecin
            global $connexion;
            $requet="INSERT INTO `quizzs`(`titre`, `difficulter`, `date_creation`, `id_user`) 
            VALUES ('".$titre."','".$difficulter."','".$datedecreation."','".$id_user."')";
            $result= $connexion->query($requet);
        }
        //3-dans un troisiemme temps on ferra une supression des elements en fonction de l'id
        public function supprime_choix($i){
            global $connexion;
            $requet="DELETE FROM `quizzs` WHERE `id`='".$i."'";
            $result=$connexion->query($requet);
        }
        //4-dans un quatieme temps on ferra un modification  des element en fonction de l'id
        public function modifictionquizz($i,$titre,$difficulter,$date_creation,$id_user){
            global $connexion;
            if($titre!=null){
                $requet="UPDATE `quizzs` set `titre`='".$titre."' where `id_quizz`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($difficulter!=null){
                $requet="UPDATE `quizzs` set `difficulter`='".$difficulter."' where `id_quizz`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($date_creation!=null){
                $requet="UPDATE `quizzs` set `date_creation`='".$date_creation."' where `id_quizz`='".$i."' ";
                $result= $connexion->query($requet);
            }
        }
        //6-maintenant retourner la liste des id des question
        public function n(){
            global $connexion;
            $requet="SELECT * FROM `quizzs`";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_quizz'];
                $i++;
            }
            return $t;
        }
    }
 ?>