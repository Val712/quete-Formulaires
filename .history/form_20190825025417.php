<form  action="form.php"  method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name" value="" required>
    </div>
    <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="user_prenom" value="" required>
    </div>
    <div>
        <label for="tel">Téléphone :</label>
        <input type="tel" id="tel" name="user_tel" reuiredq>
    </div>
    <div>
        <label for="mail">Mail :</label>
        <input type="email" id="mail" name="user_mail" required>
    </div></br>

    <label for="sujet">Quel est le sujet de votre message</label><br />
       <select name="sujet" id="sujet" required>
           <option value="PHP">PHP</option>
           <option value="Symphony">Symphony</option>
           <option value="MYSQL">MYSQL</option>
           <option value="Unix">Unix</option>
           <option value="Integration">Intégration</option>
           <option value="git">Git</option>
           <option value="CSS">CSS</option>
           <option value="HTML">HTML</option>
       </select></br>

    <div>
        <label for="msg">Message :</label> </br>
        <textarea id="msg" name="user_message" required></textarea>
    </div> </br>

    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>


<?php
  var_dump($_POST);
?>


