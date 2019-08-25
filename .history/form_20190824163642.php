<form  action="/ma-page-de-traitement"  method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name" value="">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>

    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>


<?php
  var_dump($_GET);
?>


