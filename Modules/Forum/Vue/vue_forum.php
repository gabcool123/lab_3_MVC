<form method="POST" action="index.php?Module=forum&action=forum">
    <table style="text-align: left;width: 400px;font-size: 18px;font-family: 'Dosis',Impact,sans-serif;font-weight: bold;height: 200px;" >
        <tr>
            <td style="border-bottom: 1px black inset;">Choix de forums:</td>
            
        </tr>
        <tr>
            <td>Programmation</td><td><input type="radio" name="forum_choices" value="programmation"></td>
        </tr>
        <tr>
            <td>Reseau</td><td><input type="radio" name="forum_choices" value="reseau"></td>
        
        </tr>
        <tr>
            <td>Etude</td><td><input type="radio" name="forum_choices" value="etude"></td>
        </tr>
     
        <tr>
            <td><button type="submit" class='btn btn-danger'>Charger le forum</button></td>
            
        </tr>
        
        <tr><td style="display: none;" class='comment'><a href="index.php?page=comment"><button type="button" class="btn btn-danger">Commenter</button></a></td></tr>
            
    </table>
    
    
</form>
