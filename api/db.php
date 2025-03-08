<?php

// File: api/db.php

require_once '../config/config.php';

function getDBConnection() {
    global $pdo;
    return $pdo;
}

?>