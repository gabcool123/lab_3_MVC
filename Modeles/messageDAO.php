<?php

    class Message_DAO extends Message{
      
        
        public function retrouver_mess_forum ($forum) {
            
            $connexion = PDO2::getInstance();
            
            $requete_select_forum = 
            
            
            
            $requete_tous_message = "SELECT * FROM message WHERE forum_ForumID = $id_forum";
            
            $db = $connexion->query($requete_tous_titres);
             
            $resultat = $db->fetchAll(PDO::FETCH_ASSOC);
             
            return $resultat;
            
        }
        
        public function inserer_message_dans_forum($message){
            
        }
        
        
    }

?>