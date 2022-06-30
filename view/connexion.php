<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require_once('../controller/user.class.php');
    $user= new user();
    session_start();
    if(!empty($_SESSION['id']) && isset($_SESSION['id'])){
        header('location:listing.php');
    }
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" href="../public/css/connexion.css">
    <title>connexion</title>
</head>
<body>
    <div id="bod">
        <div id="con">
            <h1>connexion</h1>
            <form action="connexiontrait.php" method="POST">
                <div class="element">
                    <span>e-mail:</span>
                    <input type="text" placeholder="entrez votre addresse e mail" id="mail" name="mail">
                    <span id="erro"></span>
                </div>
                <div class="element">
                    <span>mot de passe:</span>
                    <input type="password" placeholder="entrez votre mot de passe" id="password" name="password">
                </div>
                <div class="p" class="element">
                    <input type="checkbox" name="selection" id="selection">
                    <span id="aficher">masquer</span>
                    <span id="masque">afficher</span>
                </div>
                <div class="element">
                        <span id="erreure"></span>
                    <input type="submit" id="envoyer" onclick="verif1()">
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    let ml=[];
    let mdpa=[];
    let i;
    let t=[];
    let mai=document.getElementById("mail");
    let md=document.getElementById('password');
    let error=document.getElementById('erro');
    let erreur=document.getElementById('erreure');
    <?php $a=$user->n();?>
    <?php foreach($a as $cles=>$valeur):?>
        i=<?php echo $cles?>;
        ml[i]="<?php echo $user->getemail($valeur)?>";
        mdpa[i]="<?php echo $user->getpassword($valeur)?>";
    <?php endforeach?>

    function verif(a,b){

        error.innerText=null
        u=1
        if(a==0){
            mai.classList.add('faux')
            u=0

        }
        else{
            mai.classList=null
        }
        if(b==0){
            md.classList.add('faux')
            u=0
            if(a==0){
                erreur.innerText="identifiant incorrecte"
            }
            else{
                erreur.innerText="mot de pasee incorrecte"
            }
        }
        else{
            md.classList=null
        }
        if(u==0){
            event.preventDefault();
        }
    }
    function verif1(){
    t[0]=0; 
    t[1]=0;
    for(let m=0;m<=i;m++){
        if(mai.value==ml[m]){
            t[0]=1
            if(md.value==mdpa[m]){
                t[1]=1
            }
        }
    }
    verif(t[0],t[1])
}
</script>
<script src="../public/javascript/connexion.js">
</script>
</html>