<!DOCTYPE html>
<html lang="fr">
<head>
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
            <form>
                <div class="element">
                    <span>e-mail:</span>
                    <input type="text" placeholder="entrez votre addresse e mail" id="mail">
                    <span id="erro"></span>
                </div>
                <div class="element">
                    <span>mot de passe:</span>
                    <input type="password" placeholder="entrez votre mot de passe" id="password">
                </div>
                <div class="p" class="element">
                    <input type="checkbox" name="selection" id="selection">
                    <span id="aficher">masquer</span>
                    <span id="masque">afficher</span>
                </div>
                <div class="element">
                    <input type="submit" id="envoyer">
                </div>
            </form>
        </div>
    </div>
</body>
<script src="../public/javascript/connexion.js">
</script>
</html>