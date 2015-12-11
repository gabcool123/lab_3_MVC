<form method="POST" action="index.php?module=inscription&amp;action=inscription" style="width: 40%;margin-left:30%;">
<h1 style="border-bottom: 2px solid #3E4147">Inscription</h1><br><br>
    <label for="firstname">Entrez votre prénom: </label><input class="form-control" id="firstname" name="firstname" type="text" placeholder="Gabriel" required="true" value="<?php if(isset($firstname)){echo $firstname;} ?>"><br>
    <label for="lastname">Entrez votre nom de famille: </label><input class="form-control" id="lastname" name="lastname" type="text" required="true" value="<?php if(isset($lastname)){echo $lastname;} ?>"><br>
    <label for="username_register">Entrez votre nom d'utilisateur: </label><input class="form-control" id="username_register" name="username_register" type="text" required="true" value="<?php if(isset($username)){echo $username;} ?>"><br>
    <label for="password_register">Entrez votre mot de passe: </label><input class="form-control" id="password_register" name="password_register" type="password" required="true"><br>
    <label for="repassword_register">Entrez votre mot de passe de nouveau: </label><input class="form-control" id="repassword_register" name="repassword_register" type="password" required="true"><br>
    <label for="email">Entrez votre adresse courriel: </label><input class="form-control" id="email" name="email" type="email" placeholder="example123@example.com" required="true" value="<?php if(isset($email)){echo $email;} ?>"><br><br><br>
    <input type="submit" class="form-control" id="submit" name="submit" value="S'inscrire" style="width: 15%;margin-left: 41%;"><a href="index.php?page=accueil"><button type="button" class="btn btn-primary" style="margin-right:100%;">Retour à l'accueil</button></a>
</form>
