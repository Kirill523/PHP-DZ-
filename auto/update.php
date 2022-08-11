<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/auto/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/auto/session.php';
$id=$_POST['id'];
$email= trim(htmlspecialchars($_POST['email'])) ;
$password = trim(htmlspecialchars($_POST['password'])) ;
$fullname=trim(htmlspecialchars($_POST['fullname']));
$text=trim(htmlspecialchars($_POST['text'])) ;
$id=$_POST['id'];
print_r($_POST);
$sql="UPDATE  `users` SET `email`='$email',`password`='$password',`fullname`='$fullname',`text`='$text'
WHERE `id`='$id'";
if($connect->query($sql)){
    set_session('success','Пользователь успешно обновлен');
    header('Location: /auto/indexautho.php');
    
    exit();
}