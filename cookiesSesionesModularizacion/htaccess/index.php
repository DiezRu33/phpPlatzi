<?php

$page = $_GET["page"] ?? null;

// require("pages/$page.php");

switch ($page) {
    case 'contact':
        require("pages/contact.php");
        break;

    case 'services':
        require("pages/services.php");
         break;

    default:
        require("pages/home.php");
        break;
}

?>