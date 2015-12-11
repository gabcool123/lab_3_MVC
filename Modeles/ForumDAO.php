<?php

class ForumDAO {
    
  public function liste_forum_existants(){     

        $connexion = PDO2::getInstance();
        
        $requete_tous_titres = "SELECT * FROM forum";
        
         $db = $connexion->query($requete_tous_titres);
         
         $resultat = $db->fetchAll(PDO::FETCH_ASSOC);
             
         
        return $resultat;
        
   }
    
   public function get_tous_mess_dans_forum($id_forum){
       
        $bdd = PDO2::getInstance();
                                           
    if ($id_forum == 1){
            $req = $bdd->query('SELECT * FROM message WHERE forum_ForumID=1');
            

            $forum = $req->fetchAll();
    }
            
    else if ($id_forum == 2){
       
         $req = $bdd->query('SELECT * FROM message WHERE forum_ForumID=2');

          $forum = $req->fetchAll();
    }

            
    else if ($id_forum == 3){
       
         $req = $bdd->query('SELECT * FROM message WHERE forum_ForumID=3');

            $forum = $req->fetchAll();
    }
                 
            
            
        return $forum;
   }
   
    
}

?>