<?php include 'db.php';
dd($_POST);
$row = $Vote->find($_POST['id']);
dd($row);
$row['vote']=$row['vote']+1;
$Vote->save($row);
$mem=$Admin->find(['id'=>$_SESSION['id']]);
dd($mem);
$mem['vote']=$row['id'];
$Admin->save($mem);
to('../index.php');
//顯示結果

