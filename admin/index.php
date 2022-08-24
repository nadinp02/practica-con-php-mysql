<?php

include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");
$carpeta = isset($_GET["opcion"]) ? $_GET["opcion"] : 'contents';
$accion = isset($_GET["action"]) ? $_GET["action"] : 'list';
include('assets/includes/' . $carpeta . "/" . $accion . ".php");
include("assets/includes/footer.inc.php");
