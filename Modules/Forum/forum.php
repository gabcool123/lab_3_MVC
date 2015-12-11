

<?php 

include CHEMIN_VUE . 'vue_forum.php';
include CHEMIN_MODELE . 'ForumDAO.php';

    if(isset($_POST['forum_choices'])){
        
        ?>
<script type="text/javascript">
        $('.comment').css('display','block');
    
    
        </script>
        <?php
        if($_POST['forum_choices'] == 'programmation'){ 
       
        $id_forum = 1;
        
             //forum de programmation
            $forumProg = get_tous_mess_dans_forum($id_forum);
           
           
            while($row = $forumProg->fetch()){
                echo '<p>'.$row['texte'].'</p>';
                echo '<p>par: '.$row['membres_id'].'                                   à: '.$row['horoDate'].'</p>';
            }
            }


        }
        else if($_POST['forum_choices'] == 'reseau'){

           $id_forum = 2;  
            
            //Forum de réseau
             $forumReseau = get_tous_mess_dans_forum($id_forum);
           
           
            while($row = $forumReseau->fetch()){
                echo '<p>'.$row['texte'].'</p>';
                echo '<p>par: '.$row['membres_id'].'                                   à: '.$row['horoDate'].'</p>';
            }


        }
        else if($_POST['forum_choices'] == 'etude'){

             $id_forum = 3;

            //Forum de réseau
             $forumEtude = get_tous_mess_dans_forum($id_forum);
           
           
            while($row = $forumEtude->fetch()){
                echo '<p>'.$row['texte'].'</p>';
                echo '<p>par: '.$row['membres_id'].'                                   à: '.$row['horoDate'].'</p>';
            }
        }
    }



?>



