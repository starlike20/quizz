<!DOCTYPE html>
<html lang="fr">
    <?php require_once("../controller/quizz.class.php");
        session_start();
        unset($_SESSION['i']);
    $quizz=new quizz();
    $n=$quizz->n();
    $i=1;
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" href="../public/css/listing.css">
    <title>listing</title>
</head>
<body>
    <header>
        <span>Quizzeo</span>
        <input type="text" placeholder="recherche" id="recherche">
        <div>
            <span>clasement</span>
            <span>xp<span>
        </div>
    </header>
    <div id="listequiz">
        <?php while($i<=count($n)):?>
            <?php if(count($n)-$i<7){
                $p=count($n)-$i+1;
            }
            else{
                $p=7;
            }?>
            <div class="contain">
                <?php for($a=0;$a<$p;$a++):?>
                    <a href="presentationquiz.php?id=<?php echo$n[$i+$a-1]?>">
                        <div class="quizz-petit" class="quizz" style="background-color:rgb(<?php echo  rand(0,255)?>,<?php echo  rand(0,255)?>, <?php echo  rand(0,255)?>)"> 
                            <span class="none"><?php echo $quizz->get_titre($n[$i+$a-1])?></span>
                        </div>
                    </a>
                <?php endfor?>
                <?php $i+=$a;?>
            </div>
               
        <?php endwhile?>
    </div>
</body>
<script>
    let qui=document.querySelectorAll(".quizz-petit")
    qui.forEach(element => {
        element.addEventListener('mouseover',(event)=>{
            let text=element.querySelector(".none")
            text.style.display="block"
            element.style.width="214px"
            element.style.height="214px"
    })
        element.addEventListener('mouseout',(event)=>{
            let text=element.querySelector(".none")
            text.style.display="none"
            element.style.width="205px"
            element.style.height="205px"
    })
    });
    // function change(){
    //     console.log(event)
    //     event.target.children[0].classList.remove("none")
    //     event.target.classList.add("changer")

    // }
    function defaut(){
        event.target.children[0].classList.add("none")
        event.target.classList.remove("changer")
    }
    // for(const element of qui){
    //     console.log('1')
    //     element.addEventListener('mouveover', function(event){
    //         console.log(event)
    //         titre.classList.remove("none")
    //     })
    // width: 214px;
    // height: 214px;
    // // }
</script>
<script src="../public/javascript/listing.js"></script>
</html>