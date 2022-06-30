<!DOCTYPE html>
<html lang="fr">
    <?php require_once("../controller/quizz.class.php");
        require_once("../controller/quizz.question.class.php");
        require_once("../controller/function.php");
        require_once("../controller/theme.class.php");
       
    $theme=new theme();
    $quizzquestion=new quizz_question();
    $quizz=new quizz();
    $n=$theme->n();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" href="../public/css/profil.css">
    <link rel="stylesheet" media="screen" type="text/css" href="../public/css/ajoutquizz.css">
    <title>ajout d'un quizz</title>
</head>
<body>
    <header >
        <nav> 

            <a class="lien"><span>tableau de bord</span></a>
            <a class="lien"><span>liste des utilisateurs</span></a>
            <a id="bordure-top" class="lien"><span>validation des quizzeur</span></a>
            <a id="ancre"><span>ajout de quizz</span></a>
            <a id="bordure-bas"  class="lien"><span>liste des quizz</span></a>
            <a class="lien"><span>liste des quizz jouer</span></a>
            <a class="lien"><span>parametre</span></a>
            <!-- <a>changer de statut</a> --top 10 de quizz les plus consulter;top 10 des quizz les moins consulter;top 10 des quizz les plus laisser en cour;top 10 des theme les plus consulter,totale quizzeur,nouvelle demande de quizzeurs,nouveau quizz,joueur en ligne>-->
        </nav>
    </header>
    <div id="grand">
        <h1>bienvenue sur la page d'ajout d'un quizz</h1>
        <h2>information du quizz</h2>
    </div>
    <div id="form" >
        <form action="ajoutetraitquizz.php" method="POST" enctype="multipart/form-data">
            <div class="m">
                <label>titre:</label>
                <input type="text" placeholder="entrez le titre de votre quizz titre" id="titre" name="titre"></input>
            </div>
            <div class="m">
                <label>difficulter:</label>
                <select  type="checkbox"name="difficulter" id="difficulter">
                    <option>tres facile</option>
                    <option>facile</option>
                    <option>moyen</option>
                    <option>difficile</option>
                    <option>tres difficile</option>
                </select>
            </div>
            <div style="margin: 20px;">
                <fieldset>
                    <legend>selection en theme:</legend>
                    <?php for($i=1;$i<=$n;$i++){?>
                        <div>
                        <input type="checkbox" class="theme" name="theme">
                        <label for="theme"><?php echo $theme->get_nom($i)?></label>
                        </div>
                    <?php 
                    }  
                    ?>
                </fieldset>
            </div>
            <div class="m">
                    <input type="file" name="image" id="image" placeholder="image" onchange="verifimage()">
                    <p id="errorr"></p>
                </div>
            <input type="submit" id="envoyez" value="etape suivant">
        </form>
    </div>
</body>
</html>