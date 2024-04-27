<?php include 'db.php';

$row = $Vote->find($_POST['id']);
$row['vote']=$row['vote']+1;
$Vote->save($row);

$mem=$Admin->find(['id'=>$_SESSION['id']]);
$mem['vote']=$row['id'];
$Admin->save($mem);
to('../index.php');
//顯示結果

