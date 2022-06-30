<!DOCTYPE html>
<html lang="fr">
<?php require_once('../controller/user.class.php');
    $user=new user();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" href="../public/css/connexion.css">
    <title>inscription</title>
</head>
<body>
    <div id="erromail">
    </div>
    <div id="bod">
        <div id="con">
            <h1>inscription</h1>
            <form action="inscriptiontrait.php" method="POST">
                <div class="element">
                    <span>speudo:</span>
                    <input type="text" placeholder="entrez votre addresse votre speudo" id="speudo" name="speudo" >
                    <span id="erros"></span>
                </div>
                <div class="element">
                    <span>role:</span>
                    <select name="role" id="role">
                        <option>choisir un role</option>
                        <option>joueur simple</option>
                        <option>quizzeur</option>
                    </select>
                </div>
                <div class="element">
                    <span>e-mail:</span>
                    <input type="text" placeholder="entrez votre addresse e mail" id="mail" name="mail">
                    <span id="erro"></span><span id="erroo"></span>
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
                    <input type="submit" id="envoyer" onclick="verif()">
                </div>
            </form>
        </div>
    </div>
</body>
<style>
    #con{
        height: 600px;
    }
</style>
<script>
    let spe=new Array();
    let maiil=new Array();
    let speudo=document.getElementById("speudo");
    let errosp=document.getElementById("erros");
    let erroo=document.getElementById("erroo");
    let email=document.getElementById('mail');
    let role=document.getElementById('role');
    let mdp=document.getElementById('password');
    let validemail
    let validesepeudo
    <?php $n=$user->n();?>
    <?php foreach($n as $cles=>$valeur):?>
        spe[<?php echo $cles ?>]="<?php echo $user->getspeudo($valeur)?>" ;
        maiil[<?php echo $cles ?>]="<?php echo $user->getemail($valeur)?>";
    <?php endforeach?>
    speudo.addEventListener('keyup',function(){
        errosp.innerText= null;
        validesepeudo=1
        spe.forEach(element => {
           if(speudo.value==element) {
                errosp.innerText="speudo deja utiliser";
                errosp.style.color="red";
                validesepeudo=0
           }
        });
    });
    email.addEventListener('keyup',function(){
        erroo.innerText=null;
        validemail=1
        maiil.forEach(element=>{
            if(email.value==element){
                erroo.innerText="mail deja utiliser";
                erro.style.color='red';
                validemail=0
            }
        })
        if(email.value.includes(' ')){
            erro.innerText="entrez un mail valide"
            erro.style.color="red"
            validemail=0
        }
        else if(email.value.includes('@') && email.value.includes('.')){
            erro.innerText="mail respectant le formatage"
            erro.style.color="green"
            validemail=1
        }
        else{
            erro.innerText="ceci n'est pas encore un mail"
            erro.style.color="orange"
            validemail=0
        }
    })
    
    function verif(){
        if(email.classList[0]=="faux"){
            email.classList.remove("faux")
        }
        if(speudo.classList[0]=="faux"){
            speudo.classList.remove("faux")
        }
        if(role.classList[0]=="faux"){
            role.classList.remove("faux")
        }
        if(mdp.classList[0]=="faux"){
           mdp.classList.remove("faux")
        }
        console.log("1")
        if(validemail==0 || validemail==null){
            email.classList.add("faux");
            event.preventDefault()
        }
        if(validesepeudo==0 || validesepeudo==null){
            speudo.classList.add("faux")
        }
        if(speudo.value==""){
            speudo.classList.add("faux")
            event.preventDefault()
        }
        if(role.value=="choisir un role"){
            role.classList.add("faux")
        }
        if(email.value==""){
            email.classList.add("faux")
        }
        if(mdp.value==""){
            mdp.classList.add("faux")
        }
    }
</script>
<script src="../public/javascript/connexion.js"></script>
</html>