<?php
$title = 'Authentification';

ob_start(); ?>

<div class="container" id="container">
    <div class="form-container sign-up-container">

        <form action="#">

            <h1>Créer un compte</h1>
            <div class="social-container">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>Utiliser un compte gmail</span>
            <div class="scroller">
                <input type="text" placeholder="Nom">
                <input type="text" placeholder="Prénom">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Nouveau mot de passe">
                <input type="text" placeholder="Taille(cm)">
                <input type="text" placeholder="Poids(kg)">
                <input id="date" type="date" value="Date de naissance">
                <div class="sexe">
                    <label>Femme</label>
                    <input type="radio" name=" genre">
                    <label>Homme</label>
                    <input type="radio" name=" genre">
                </div>

                <button> Créer le compte</button>
            </div>
        </form>
    </div>

    <div class="form-container login-container">
        <form action="#">
            <h1>Se connecter</h1>
            <div class="social-container">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>Je n'ai pas de compte</span>
            <input type="email" placeholder="identifiant">
            <input type="password" placeholder="mot de passe">
            <button>Se connecter</button>

        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bienvenue!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure facilis dolores doloribus nulla
                    adipisci maiores nemo odit voluptate necessitatibus eveniet accusantium aspernatur, ab, nostrum
                </p>
                <button class="ghost" id="login">Se connecter</button>
            </div>

            <div class="overlay-panel overlay-right">
                <h1>Bienvenue!</h1>
                <p>Créer un compte et rejoindre notre communauté
                </p>
                <button class="ghost" id="signUp">Créer un compte</button>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require 'template.php' ?>