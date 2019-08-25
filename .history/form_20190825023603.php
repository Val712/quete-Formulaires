<form  action="form.php"  method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name" value="">
    </div>
    <div>
        <label for="tel">Téléphone :</label>
        <input type="tel" id="tel" name="user_tel">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>

    <label for="sujet">Quel est le sujet de votre message</label><br />
       <select name="sujet" id="sujet">
           <option value="PHP">France</option>
           <option value="Symphony">Espagne</option>
           <option value="MYSQL">Italie</option>
           <option value="Unix">Royaume-Uni</option>
           <option value="Intégration">Canada</option>
           <option value="Git">États-Unis</option>
           <option value="CSS">Chine</option>
           <option value="HTML">Japon</option>
       </select>

    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>

    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>


<?php
  var_dump($_POST);
?>


