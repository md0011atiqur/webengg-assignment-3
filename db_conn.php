

<?php
$db = mysqli_connect('localhost', 'root', '', 'webenglab3');

//servername, username, password, database

if (!$db) {
    die('Could not connect: ' . mysql_error());
}
mysqli_set_charset($db,"utf8");
?>