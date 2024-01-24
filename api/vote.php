<?php include 'db.php';
$DB = new DB($_POST['table']);
$row = $DB->find($_POST['id']);
$row['vote']=$row['vote']+1;
$Vote->save($row);

//顯示結果

