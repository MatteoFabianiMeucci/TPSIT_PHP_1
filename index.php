<?php
include "utente.php";
$user = new Utente("Matteo");
echo $user->getNome();
?>