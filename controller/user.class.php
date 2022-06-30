<?php 
    require_once('connexion_bd.php');
    class user{
        public function __construct(){
        }
        public function getspeudo($i){
            global $connexion;
            $requet="SELECT`speudo` FROM `user`Where `id_user`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['speudo'];
            }
            return $t;
        }
        public function getemail($i){
            global $connexion;
            $requet="SELECT`e-mail` FROM `user`Where `id_user`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['e-mail'];
            }
            return $t;
        }
        public function getpassword($i){
            global $connexion;
            $requet="SELECT`password` FROM `user`Where `id_user`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['password'];
            }
            return $t;
        }
        public function ajoututilisateur($speudo,$email,$pasword,$role,$isconnect){
            global $connexion;
            $requet="INSERT INTO `user`(`speudo`, `e-mail`, `password`, `role`, `isconnect`) 
            VALUES ('".$speudo."','".$email."','".$pasword."','".$role."','".$isconnect."'";
            $result= $connexion->query($requet);
        }
        public function role($i){
            global $connexion;
            $requet="SELECT`role` FROM `user`Where `id_user`=".$i."";
            $result= $connexion->query($requet);
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t=$a['role'];
            }
            return $t;
        }
        public function supprime($i){
            global $connexion;
            $requet="DELETE FROM `user` WHERE `id_user`='".$i."'";
            $result=$connexion->query($requet);
        }
        public function modifie($i,$speudo,$mail,$pasword,$role){
            global $connexion;
            if($speudo!=null){
                $requet="UPDATE `user` set `speudo`='".$speudo."' where `id_user`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($mail!=null){
                $requet="UPDATE `user` set `e-mail`='".$mail."' where `id_user`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($pasword!=null){
                $requet="UPDATE `user` set `password`='".$pasword."' where `id_user`='".$i."' ";
                $result= $connexion->query($requet);
            }
            if($role!=null){
                $requet="UPDATE `user` set `role`='".$role."' where `id_user`='".$i."' ";
                $result= $connexion->query($requet);
            }

        }
        public function n(){
            global $connexion;
            $requet="SELECT * FROM `user`";
            $result= $connexion->query($requet);
            $i=0;
            $t[0]=0;
            while($a=$result->fetch_array(MYSQLI_ASSOC)){
                $t[$i]=$a['id_user'];
                $i++;
            }
            return $t;  
        }
    }
?>