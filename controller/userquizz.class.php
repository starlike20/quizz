<?php
    require_once('connexion_bd.php');
    class userquizz{
        public function __construct(){
        }
        public function getidquiz($i){
            global $connexion;
            $requet="SELECT`id_quizz` FROM `user-quizz`Where `id_user`='".$i."'";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_quizz'];
                $i++;
            }
            return $t;
        }
        public function getscore($i,$id){
            global $connexion;
            $requet="SELECT`score` FROM `user-quizz`Where `id_user`=".$i." and `id_quizz`='".$id."'";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['score'];
            }
            return $t;
        }
        public function getid_user($i){
            global $connexion;
            $requet="SELECT`id_user` FROM `user-quizz`Where `id_quizz`='".$i."'";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_user'];
                $i++;
            }
            return $t;
        }
        public function supprimeuserquizz($i){
            global $connexion;
            $requet="DELETE FROM `user-quizz` WHERE `id_user`='".$i."'";
            $result=$connexion->query($requet);
        }
        public function modifieuserquizz($i,$idqui,$score){
            global $connexion;
            if($idqui!=null){
                $requet="UPDATE `user-quizz` set `id_quizz`='".$idqui."' where `id_user`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($idqui!=null){
                $requet="UPDATE `user-quizz` set `score`='".$score."' where `id_user`='".$i."' ";
                $result= $connexion->query($requet);
            }

        }
        public function n(){
            global $connexion;
            $requet="SELECT * FROM `user-quizz`";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_user'];
                $i++;
            }
            return $t;  
        }
    }
?>