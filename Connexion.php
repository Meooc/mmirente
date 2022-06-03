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
        <div class="catégorie2"><a href="PageMonCompte.html" class="button">Mon Compte</a></div>
        <div id="barre">
        <input id="recherche" class="searchbar"  type="text" name="search" placeholder="Recherchez...">
        <img src="Ressources/Loupe.png" id="loupe"></div></div>
    <div class="connexion">
        <h1>CONNEXION</h1>
        <form method="post" action="">
            <div class="role">
                    <input type="radio" name="user" class="user normal" id="usertype" value="0" checked>
                    <label for="usertype">Utilisateur</label>
                    <input type="radio" name="user" class="user power" id="admintype" value="1">
                    <label for="admintype">Administrateur</label>
            </div>
                    <table class="formulaire">
                    <tr>
                        <td>
                            <input type="email" placeholder="Entrez votre mail" id="mail" name="mail" class="champ"/>
                         </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" placeholder="Entrez votre mot de passe" id="mdp" name="mdp" class="champ"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="restezConnecter"/>
                            <label for="RestezConnecter">Restez connecté</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br/>
                            <button type="submit" name="formconnexion">SE CONNECTER</button>
                        </td>
                    </tr>
                    </table>
                </form><p class="red">
                <?php
                    $db_server = 'localhost';
                    $db_name = 'mmirent_2';
                    $db_user_login = 'root';
                    $db_user_pass = '';
                    session_start();
                    if(isset($_POST['formconnexion']))
                    if(empty($_POST['mail'])) {
                        echo "Le champ mail est vide.";
                    } else {
                        if(empty($_POST['mdp'])) {
                         echo "Le champ mot de passe est vide.";
                        } else {
                        $mail = htmlentities($_POST['mail'], ENT_QUOTES, "ISO-8859-1"); 
                        $mdp = sha1($_POST['mdp']);
                        $bdd = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);
                        $Requete = mysqli_query($bdd,"SELECT * FROM utilisateur WHERE email = '".$mail."' AND mdp = '".$mdp."'");
                        if(mysqli_num_rows($Requete) == 0) {
                            echo "Le mail ou le mot de passe est incorrect, le compte n'a pas ete trouvé.";
                        } else {
                            if(isset($_POST['user']) && $_POST['user'] == "1"){
                                $admin = $bdd->query("SELECT administrateur FROM utilisateur WHERE email = '".$mail."' AND mdp = '".$mdp."'");
                                $verif = $admin->fetch_assoc();
                                if($verif['administrateur']!='1'){
                                    echo "Vous n'êtes pas administrateur";
                                }
                                else{
                            $q = $bdd->query(
                                "SELECT administrateur FROM `utilisateur`
                                WHERE email = '".$mail."' AND mdp = '".$mdp."'"
                                            ); 
                            while( $r = mysqli_fetch_array($q)){
                            echo 'Résultat de la recherche: '.$r['email'].'<br />';
                            $_SESSION['admin'] = $r['administrateur'];}
                            echo $_SESSION['admin'];
                            header('Location:Reservations.php');
                            echo "Vous etes à present connecte !";}}
                            else{
                                $q = $bdd->query(
                                    "SELECT idutilisateur FROM `utilisateur`
                                    WHERE email = '".$mail."' AND mdp = '".$mdp."'"
                                                ); 
                                while( $r = mysqli_fetch_array($q)){
                                echo 'Résultat de la recherche: '.$r['email'].'<br />';
                                $_SESSION['user'] = $r['idutilisateur'];}
                                echo $_SESSION['user'];
                                header('Location:PageAccueilmmirent.php');
                                echo "Vous etes à present connecte !";
                            }

                }
        }
    }
?></p>
    </div>
    <script src="mmirent.js"></script>
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
</div>
</body>
</html>