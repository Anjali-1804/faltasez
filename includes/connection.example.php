<?php

/* Connecting to database.
   Copy this file to connection.php and fill in local values.
   Do not commit connection.php. */

define("DB_SERVER", "127.0.0.1");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "fsez_db");

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (mysqli_connect_errno()) {
  echo "Failed to connect to Database Server: " . mysqli_connect_error();
}

?>
