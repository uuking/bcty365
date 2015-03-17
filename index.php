<?php
session_start();
require_once 'conn/config.inc.php';
$smarty->display('index.html');
?>