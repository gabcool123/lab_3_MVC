<form method="POST" action="comment.php">
    <?php 
            if(isset($_POST['valider']))
            {
                try{
                        $bdd = new PDO('mysql:host=localhost;dbname=laboratoire_3', 'root','');
                    }catch(Exception $e){
                        die('Il y a une erreur en se connectant à la base de données: ' + $e->getMessage());
                    }
                    
                    $comment = htmlspecialchars($_POST['comment']);
                    
                    
                    $test = $bdd->query('SELECT * FROM message INNER JOIN membres,forum ON '
                            . '(message.membres_id=membres.id,'
                            . 'message.parent_messageID=message.messageID,'
                            . 'message.forum_ForumID=forum.ForumID)');
                    
                   
                    
                    
                    
                    
                    $req = $bdd->prepare('INSERT INTO message(texte,) VALUES(:comment)');
                    $req->bindValue(':comment', $comment);
                    
                    $req->execute();
                    
                    
                    
                   // header('Location:index.php?page=forum');
                    
            }
                    
         
                    
    
    
    ?>
    <h1>Commentez</h1>
    <textarea rows="10" cols="70" name="comment" id="com" placeholder="Votre commentaire..." required="true">
        
    </textarea><br>
    <a href="index.php?page=forum"><button type="button" class="btn btn-primary">Retour au forum</button></a>                <button type="submit" name="valider" class="btn btn-danger">Commentez</button>
</form>

