<?php include("inc/header.php")?>


<main class="main">


<form action="contact.php" method="post">
	 <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <input type="button" value="Envoyer">
</form>





</main>







<?php include("inc/footer.php") ?>