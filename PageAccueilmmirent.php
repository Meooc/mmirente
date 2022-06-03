<?php
session_start();
    if(!isset($_SESSION['user'])){
        header('Location:connexion.php');
        die();
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" href="PageAccueilmmirent.css">
<meta charset="UTF-8"/>
<title>MMI RENT Page Accueil</title>
</head>
<body>
    
    <script type="text/javascript" src="PageAccueilmmirent.js"> </script>
    <div id="nav">
        <div class="logo"><a href="https://elearning.univ-eiffel.fr/?redirect=0"><img src="../logo.png" alt="Logo de l'université"></a></div>
        <div class="catégorie"><a href="PageAccueilmmirent.html" class="button">Accueil</a></div>
        <div class="catégorie"><a href="PageMonCompte.html" class="button">mon compte</a></div>
        <div id="barre">
            <input id="searchbar"  type="text"
        name="search" placeholder="Recherchez...">
        <img src="../Ressources/Loupe.jpg" id="Loupe"></div>
    </div>
        <div id="head_slider">
            <div id="head_slider_content">
                <img src="../Ressources/ordi.jpg" alt="ordinateur de l'iut">
                <figcaption>Réservez du matériel de<br>la salle VR en ligne !
                    <hr width="250" color="white" height="25">
                </figcaption>
                <img src="../Ressources/oculus.jpg" alt="oculus rift">
                <img src="../Ressources/micro.jpg" alt="Microphone">
                
            </div>
        </div>
    </div>
    
</div>       
    <div id="footer">
        <div class="logo"><a href="https://elearning.univ-eiffel.fr/?redirect=0"><img src="../logo.png" alt="Logo de l'université"></a></div>
    </div>
</body>
</html>