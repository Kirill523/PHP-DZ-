<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/auto/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/auto/session.php';
$id=$_GET['id'];
$sqldel="DELETE FROM `users` WHERE `id`=$id";
$result=$connect->query($sqldel);
if($connect->query($sqldel)){
        set_session('success',"Пользователь успешно удален");
        unset($_SESSION['id']);
    header('Location: /auto/index.php');
        exit();
}
?>
