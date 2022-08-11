<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/auto/session.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/auto/db.php';
$email = htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : ' ' ) ;
$password = htmlspecialchars(isset($_POST['password']) ? $_POST['password'] : ' ') ;


/**
 * соединение с бд
 * $connect
 */
$connect->query($sql_select);
while ($user=$result->fetch_object()){
    if($user->email===$email && $user->password===$password){
       $id=$user->id;
       $_SESSION['id']=$id;
        header('Location: /auto/indexautho.php');
        exit();
    } 
}
set_session('error', 'Пользователь не найден');
header('Location: /auto/index.php');
        exit();

?>