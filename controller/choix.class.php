<?php 
 require_once('connexion_bd.php');
    class choix {
        public function __construct(){
        }
        //la table choix est defini par sont id ,la reponse ,par la isbonnereponse,et par l'id de la question
        //1- dans un premier temps on vas selectionner les different element en fonction de l'id 
        public function get_reponse($i){    //avoir la reponse en fonction de l'id
            global $connexion;
            $requet="SELECT`reponse` FROM `choix`Where `id_choix`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['reponse'];
            }
            return $t;
        }
        public function get_bonnereponse($i){//avoir isboonereponse en fonction de l'id
            global $connexion;
            $requet="SELECT`bonnereponse` FROM `choix`Where `id_choix`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['bonnereponse'];
            }
            return $t;
        }
        public function get_id_question($i){//avoir id de la questionn en fonction de l'id
            global $connexion;
            $requet="SELECT`id_question` FROM `choix`Where `id_choix`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['id_question'];
            }
            return $t;
        }
        //2-dans un deuxiemme temps on verras une selection de l'id du choix en fonction de l'id de la question
        public function get_id_choix($i){
            global $connexion;
            $requet="SELECT`id_choix` FROM `choix`Where `id_question`=".$i."";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_choix'];
                $i++;
            }
            return $t;
        }
        //3-dans un troisiemme temps on ferra une supression des elements en fonction de l'id
        public function supprime_choix($i){
            global $connexion;
            $requet="DELETE FROM `choix` WHERE `id_choix`='".$i."'";;
            $result=$connexion->query($requet);
        }
        //4-dans un quatriememe temps on ferra une supresion des elements en fonction de l'id
        public function modifie_choix($i,$reponse,$isbonnereponse){
            global $connexion;
            if($reponse!=null){
                $requet="UPDATE `choix` set `reponse`='".$reponse."' where `id_choix`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($isbonnereponse!=null){
                $requet="UPDATE `choix` set `bonnereponse`='".$isbonnereponse."' where `id_choix`='".$i."' ";
                $result= $connexion->query($requet);
            }
        }
        //5-maintenant retourner 
        public function n(){
            global $connexion;
            $requet="SELECT * FROM `choix`";
            $result= $connexion->query($requet);
            $i=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_choix'];
                $i++;
            }
            return $t;
        }
    }
?>