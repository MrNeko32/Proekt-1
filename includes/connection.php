<?php
require("constants.php");

$con = mysqli_connect("$DB_SERVER","$DB_USER", "$DB_PASS", "$DB_NAME") or die ("cannot connect server ");
mysqli_query($con, 'SET CHARSET "utf8"');
?>
