<?php include_once "db.php";

$res=$Admin->count($_POST);
$row=$Admin->find($_POST);
if($res){
    $_SESSION['user']=$_POST['acc'];
    $_SESSION['id']=$row['id'];
}
echo $res;

//echo $User->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

/* echo $res; */

/* if($res>0){
    echo 1;
}else{
    echo 0;
} */

