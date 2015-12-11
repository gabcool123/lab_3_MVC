<?php

 class Message {
     
    private $id_message;
    private $text_message;
    private $date_message;
    private $sous_message;
    private $id_mess_parent;
    
    public function __construct ($id_message, $text_message, $date_message, $sous_message, $id_mess_parent){
        
        $this->id_message = $id_message;
        $this->text_message = $text_message;
        $this->date_message = $date_message;
        $this->sous_message = $sous_message;
        $this->id_mess_parent = $id_mess_parent;
    }
    
    public function get_id_message (){
        return $this->id_message;
    }
    
    public function set_id_message ($id_message){
        $this->id_message = $id_message;
    }
    
    public function get_text_message (){
        return $this->text_message;
    }
    
    public function set_text_message ($text_message){
        $this->id_message = $id_message;
    }
    
    public function get_date_message (){
        return $this->date_message;
    }
    
    public function set_date_message ($date_message){
        $this->date_message = $date_message;
    }
    
    public function get_sous_message (){
        return $this->sous_message;
    }
    
    public function set_sous_message ($sous_message){
        $this->sous_message = $sous_message;
    }
    
    public function get_id_message_parent (){
        return $this->id_mess_parent;
    }
    
    public function set_id_mess_parent ($id_mess_parent){
        $this->id_mess_parent = $id_mess_parent;
    }
}



?>