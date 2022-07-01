<?php
session_start();
session_destroy();
header('Location: succlogout.html');
echo 'Succesfuly logged out'
?>