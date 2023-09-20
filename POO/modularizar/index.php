<?php
require("user.php");
require("admin.php");

$user = new Usuario;
$user->type = new Admin;
echo $user->type->saludo();

?>