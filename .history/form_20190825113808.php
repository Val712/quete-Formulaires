<form  action="form.php"  method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name" value="" required placeholder="Votre nom" maxlength="15">
    </div>
    <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="user_prenom" value="" required placeholder="Votre prénom"maxlength="15">
    </div>
    <div>
        <label for="tel">Téléphone :</label>
        <input type="tel" id="tel" name="user_tel" required placeholder="ex : 0559563289" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
    </div>
    <div>
        <label for="mail">Mail :</label>
        <input type="email" id="mail" name="user_mail" required placeholder="exemple@exemple.fr" maxlength="30">
    </div></br>

    <label for="sujet">Quel est le sujet de votre message</label><br />
       <select name="sujet" id="sujet" required>
           <option value="PHP">PHP</option> 
           <option value="Unix">Unix</option>
           <option value="Integration">Intégration</option>
           <option value="git">Git</option>
           <option value="CSS">CSS</option>
           <option value="HTML">HTML</option>
       </select></br>

    <div>
        <label for="msg">Message :</label> </br>
        <textarea id="msg" name="user_message" required placeholder="écrivez ici votre message"rows="10" cols="50"></textarea>
    </div> </br>

    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>


<?php
  var_dump($_POST);
?>


