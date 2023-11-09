<?php

$db = new mysqli('localhost', 'root', '1021245', 'frangia.cl');

if ($db->connect_error) {
    die('Error de conexión (' . $db->connect_errno . ') '
        . $db->connect_error);
}


?>


