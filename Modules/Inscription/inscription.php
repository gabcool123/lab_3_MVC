 <?php
    include CHEMIN_VUE . 'vue_inscription.php';
    
    
    if(isset($_POST['submit'])){
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $username = htmlspecialchars($_POST['username_register']);
        $password = htmlspecialchars(sha1($_POST['password_register']));
        $repassword = htmlspecialchars(sha1($_POST['repassword_register']));
        $email = htmlspecialchars($_POST['email']);
        
        
        if(!empty($firstname) && !empty($lastname) && !empty($username) && !empty($password) && !empty($repassword) && !empty($email)){
            if(strlen($username) >= 5 && strlen($username) <= 16){
                if($password == $repassword){
                    
                    
                    // On veut utiliser le modele de l'inscription (~/modeles/inscription.php)
                    include CHEMIN_MODELE . 'mod_inscription.php';
                    
                   $id_utilisateur = ajouter_user_dans_bd($firstname, $lastname, $username, $password, $repassword, $email);
                    
                   
                   if (ctype_digit($id_utilisateur)) {
                       
                       
                       include CHEMIN_VUE . 'inscription_reussie.php';
                   }
                   
                   header ("Location:index.php?module=Inscription&amp;action=inscription");
                        
                        
                        die('<font size="34">Bonjours'.' '.$_SESSION['utilisateur'].' ,vous serez redirigez sous peu</font>');

                    }
                    else{
                        echo "Les mots de passes ne sont pas identiques"; 
                    }
 
                }
                else{
                    echo "Le nom d'utilisateur doit contenir entre 5 et 16 caractères"; 
                }
            }
        }
    

?>



