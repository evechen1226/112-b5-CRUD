<?php include_once "db.php";

unset($_POST['pw2']);
$Admin->save($_POST);

to('../index.php');