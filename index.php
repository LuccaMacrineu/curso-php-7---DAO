<?php

require_once("config.php");

$mike = new Usuario();

$mike->loadById(1);

echo $mike;

?>