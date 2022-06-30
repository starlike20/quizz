<!DOCTYPE html>
<html lang="fr">
    <?php require_once("../controller/quizz.class.php");
    require_once("../controller/function.php");
    require_once("../controller/quizz.class.php");
    require_once("../controller/quizz.question.class.php");
    require_once("../controller/choix.class.php");
    require_once("../controller/question.class.php");
    session_start();
    $choix=new choix();
    $quizzquestion=new quizz_question();
    $question=new question();
    $quizz=new quizz();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" href="../public/css/questionaire.css">
    <title>listing</title>
</head>
<body>
    <header>
        <?php $id=$_GET['id'];
        $c=$_GET['c'];
        $i=$_GET['i'];
        $n=$quizzquestion->get_id_question($id);
        $a=count($n);
        ?>
        <span>Quizzeo</span>
        <span>listing</span>
        <div>
            <span>clasement</span>
            <span>xp<span>
        </div>
    </header>
    <div>
        <div id="ba">
            <div><span>score:<span id="score"><?php echo $c;?></span></span></div>
            <span><?php echo $i+1?>/<?php echo $a?></span>
            <div id="base">
                <div id="evolution"></div>
            </div>
        </div>
        <div id="align">
            <p id="titre1"><?php echo $question->get_intituléQuestion($n[$i]) ;?></p>
            <?php $nn=$choix->get_id_choix($n[$i]);
            ?>
            <?php foreach($nn as $clas=>$valeur):?>
                <div class="reponse">
                    <?php echo $choix->get_reponse($valeur)?>
                </div>
            <?php endforeach?>
            <div id="commentaire" class="none">
                <span><?php echo $question->get_commentaire($n[$i]) ?></span>
            </div>
            <div id="valider" class="affiche" onclick="valide()">valider</div>
            <div id="continuer" class="none" onclick="next()">continuer</div>
            <div id="terminer" onclick="terminer()">terminer</div>
        </div>
    </div>
</body>
<?php $b=(($i+1)/$a)*100?>
<style>
    #ba{
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        top:180px;
        width:99%;
    }
    #base{
        width: 500px;
        height: 10px;
        background-color: #C5C7C7;
        border-radius: 10px;
    }
    #evolution{
        background-color: #f94cff;
        height: 100%;
        border-radius: 10px;
    }
</style>
<script>
    let choix=document.querySelectorAll(".reponse")
    let valider=document.getElementById("valider")
    let continuer=document.getElementById("continuer")
    let commentaire=document.getElementById("commentaire")
    let evolution=document.getElementById("evolution")
    let body=document.querySelector("body")
    let p=0 
    let c=parseInt(document.getElementById("score").textContent);
    let valid
    let select
    evolution.style.width="<?php echo $b?>%"
    function valide(){
        if(select==1){
            valid=1
            choix.forEach(element => {
                if(element.classList[1]=="select" && element.innerText=="<?php echo bonnereponse($n[$i]) ?>"){
                    p=1
                    element.classList.remove("select")
                    element.classList.add("bonne")
                    c++
                }
                else if(element.innerText=="<?php echo bonnereponse($n[$i]) ?>"){
                    element.classList.add("bonne")   
                }
                else if (element.classList[1]=="select"){
                    element.classList.remove("select")
                    element.classList.add("faux")
                }
            });
            valider.classList.remove("affiche")
            valider.classList.add("none")
            continuer.classList.remove("none")
            continuer.classList.add("affiche")
            commentaire.classList.remove("none")
            commentaire.classList.add("affiche")
        }
        else{
            alert("selectionner un reponse")
        }
    }
    <?php $_SESSION['score']=0?>
    choix.forEach(element=>{
        element.addEventListener('click',()=>{
        if(valid==1){
            z=1+1
        }
        else{
            choix.forEach(element => {
            if(element.classList[1]=="select"){
                element.classList.remove("select")
            }
            });
            event.target.classList.add("select")
            select=1
        }
        })
    })
    function next(){
        <?php loand($i)?>
        if(<?php echo $i?>==21){
            location.href="finquizz.php?id=<?php echo $id?>&c="+c+"&i=<?php echo $i+1?>"
        }
        else{
            location.href="questionaire.php?id=<?php echo $id?>&c="+c+"&i=<?php echo $i+1?>"
        }
    }
    function terminer(){
        location.href="finquizz.php?id=<?php echo $id?>&c="+c+"&i=<?php echo $i+1?>"
    }
    window.addEventListener('load',()=>{
        console.log('1')
       return false
    })
    body.addEventListener('load',()=>{
        event.preventDefault()
        console.log("2")
    })
</script>
<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
<script src="../public/javascript/questionaire.js"></script>
</html>