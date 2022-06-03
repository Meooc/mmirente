<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" href="insc_con.css">
<meta charset="UTF-8"/>
<title>MMI RENT Page Accueil</title>
</head>
<body>
    
    <script type="text/javascript" src="PageAccueilmmirent.js"> </script>
    <div id="nav">
        <div class="logo"><a href="https://elearning.univ-eiffel.fr/?redirect=0"><img src="Ressources/logo.png" alt="Logo de l'université"></a></div>
        <div class="catégorie"><a href="PageAccueilmmirent.html" class="button">Accueil</a></div>
        <div class="catégorie"><a href="PageMonCompte.html" class="button">Mon Compte</a></div>
        <div id="barre">
            <input id="searchbar"  type="text"
        name="search" placeholder="Recherchez...">
        <img src="Ressources/Loupe.jpg" id="Loupe"></div>
    </div>
    <div class="inscrip">
        <h1>INSCRIPTION</h1>
        <form method="POST" action="">
            <table class="formulaire">
               <tr>
                  <td>
                     <input type="text" placeholder="Entrez votre mail" id="mail" name="mail" class="champ"/>
                  </td>
               </tr>
               <tr>
                  <td>
                     <input type="text" placeholder="Entrez votre prénom" id="prénom" name="prénom" class="champ"/>
                  </td>
               </tr>
               <tr>
                  <td>
                     <input type="text" placeholder="Entrez votre nom" id="nom" name="nom" class="champ"/>
                  </td>
               </tr>
               <tr>
                  <td>
                     <input type="date" placeholder="Entrez votre date de naissance" id="nais" name="nais" class="champ"/>
                  </td>
               </tr>
               <tr>
                  <td>
                     <input type="password" placeholder="Entrez votre mot de passe" id="mdp" name="mdp" class="champ"/>
                  </td>
               </tr>
               <tr>
                  <td>
                     <input type="password" placeholder="Confirmez votre mot de passe" id="mdp2" name="mdp2" class="champ"/>
                  </td>
               </tr>
               <tr>
                  <td>
                     <br/>
                     <button type="submit" name="forminscription">S'INSCRIRE</button> 
                  </td>
               </tr>
            </table>
         </form>

            <?php
            $bdd = new PDO('mysql:host=127.0.0.1; port=3308; dbname=mmirent_2', 'root', '');
 
            if(isset($_POST['forminscription'])) {
                $nom = htmlspecialchars($_POST['nom']);
                $prénom = htmlspecialchars($_POST['prénom']);
                $mail = htmlspecialchars($_POST['mail']);
                $mdp = sha1($_POST['mdp']);
                $mdp2 = sha1($_POST['mdp2']);
                $nais = $_POST['nais'];
                if(!empty($_POST['mail']) AND !empty($_POST['nom']) AND !empty($_POST['prénom']) AND !empty($_POST['nais']) AND !empty($_POST['mdp'])) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO utilisateur(mdp, email, nom, prenom, dateNais, administrateur) VALUES(?, ?, ?, ?, ?, ?)");
                     $insertmbr->execute(array($mdp, $mail, $nom, $prénom, $nais, '0'));
                     header('Location:connexion.php');
                 } else {
                     echo "Vos mots de passes ne correspondent pas !";
                 }
                }else {
                    echo "Tous les champs doivent être complétés !";
                }
            }
            ?></p>
    </div>
    <div id="footer">
    <div id="logo2"><a href="https://elearning.univ-eiffel.fr/?redirect=0%22%3E"><img class="logo" src="Ressources/logo.png" alt="Logo de l'université"></a></div>
    <div class="colone">
        <h3>Qui sommes-nous ?</h3>
        <a href="https://www.univ-gustave-eiffel.fr/" class="button">Université Gustave Eiffel<br><br></a>
        <a href="https://cipen.univ-gustave-eiffel.fr/" class="button">Centre d'Innovation Pédagogique et<br>Numérique (CIPEN)</a>
    </div>
    <div class="colone">
        <h3>Support</h3>
        <a href="" class="button">FAQs<br><br></a>
        <a href="" class="button">Privacy</a>
    </div>
    <div class="colone">
        <h3>Restons en contact</h3>
        <a href="" class="button">Vous pouvez nous contacter <br>au 01 60 95 72 54<br>du lundi au vendredi de 9h à 17h par courriel<br><br></a>

        <a href="https://cipen.univ-gustave-eiffel.fr/" class="button">cipen@univ-eiffel.fr</a>
    </div>
    <div class="colone">
        <h3>Suivez-nous</h3>
        <div id="réseaux">
            <a href="https://www.instagram.com/?hl=fr%22%3E"><img class="res" src="Ressources/insta.png"></a>
            <a href="https://twitter.com/home?lang=fr%22%3E"><img class="res" src="Ressources/twitter.png"></a>
            <a href="https://www.youtube.com/%22%3E"><img class="res" src="Ressources/youtube.png"></a>
            <a href="https://www.linkedin.com/feed/%22%3E"><img class="res" src="Ressources/link.png"></a>
            <a href="https://fr-fr.facebook.com/%22%3E"><img class="res" src="Ressources/facebook.png"></a>
        </div>
    </div>
</div>
</body>
</html>