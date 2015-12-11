<?php

class Forum {
    
    private $titre_forum;
    private $id_forum;
    private $tous_message;
    
    public function __construct($titre_forum, $id_forum, $tous_message) {
        
        $this->titre_forum = $titre_forum;
        $this->id_forum = $id_forum;
        $this->tous_message = $tous_message;
    }
}

?>