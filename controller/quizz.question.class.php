<?php
    require_once('connexion_bd.php');
    class quizz_question{
        public function __construct(){
        }
        public function get_id_quizz($i){
            global $connexion;
            $requet="SELECT`id_quizz` FROM `quizz_question`Where `id_question`=".$i."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_quizz'];
                $i++;
            }
            return $t;
        }
        public function get_id_question($i){
            global $connexion;
            $requet="SELECT`id_question` FROM `quizz_question`Where `id_quizz`=".$i."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_question'];
                $i++;
            }
            return $t;
        }
        public function supression_qquestion($i){
            global $connexion;
            $requet="DELETE FROM `quizz_question` WHERE `id_quizz`='".$i."'";
            $result=$connexion->query($requet);
        }
        public function modifiqquestion($iq,$iqm,$iqt,$iqtm){
            global $connexion;
            if($iq!=null){
                $requet="UPDATE `quizz_question` set `id_quizz`='".$iqm."' where `id_question`='".$iq."' ";
                $result= $connexion->query($requet);
            }
            if($iqt!=null){
                $requet="UPDATE `quizz_question` set `id_question`='".$iqtm."' where `id_quizz`='".$iqt."' ";
                $result= $connexion->query($requet);
            }
        }
        public function n(){
            global $connexion;
            $requet="SELECT * FROM `quizz_question`";
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