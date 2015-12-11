<?php


function ajouter_user_dans_bd ($firstname, $lastname, $username, $password, $repassword, $email){

   $bdd = PDO2::getInstance();
   

$bothSame = $bdd->prepare("SELECT nom_utilisateur FROM membres WHERE nom_utilisateur = ':user'");
$bothSame->bindParam(':user', $username);
$bothSame->execute();

if($bothSame->rowCount() > 0)
{
    echo 'DÃƒÂ©solÃƒÂ© l\'utilisateur que vous essayer de prendre est dÃƒÂ©jÃƒÂ  utilisÃƒÂ© dans la base de donnÃƒÂ©es'
        . 'Veuillez en choisir un autre.';
}
else{

    $req = $bdd->prepare('INSERT INTO membres(prenom, nom_famille, nom_utilisateur, mot_de_passe, adresse_email, date_inscription) VALUES(:firstname,:lastname,:utilisateur, :password, :email, NOW()');
    $req->bindValue(':firstname', $firstname);
    $req->bindValue(':lastname', $lastname);
    $req->bindValue(':utilisateur', $username);
    $req->bindValue(':password', $password);
    $req->bindValue(':email', $email);
    
    //$req->bindValue(':date', date('Y-m-d H:i:s'));

    if($req->execute()){
        return $pdo->lastInsertId();
    }

    $select = $bdd->query('SELECT * FROM membres');

    while($donnees = $select->fetch()){
        $_SESSION['utilisateur'] = $donnees['nom_utilisateur'];
    }

    $select->closeCursor();
    }
}
    ?>