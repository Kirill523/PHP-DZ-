<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/auto/header.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/auto/db.php';
$id=$_GET['id'];
$sql="SELECT email,fullname, text FROM `users` WHERE `id` = $id";
$result=$connect->query($sql);
$user=$result->fetch_object();

?>
<div class="container">
    <div class="row mt-5">
        <h2>Измените данные</h2>
        <form method="POST" action="update.php">
            <div class="mb-3">
            <input type="text" value="<?=$user->email?>" class="form-control" name="email" placeholder="Введите адрес электронной почты" required>
            <input type="hidden"value="<?=$id?>" name='id'>
            </div>
            <div class="mb-3">
            <input type="password"  value="<?=$user->password?>" class="form-control" name="password" placeholder="Введите ваш новый пароль" required>
            </div>
            <div class="mb-3">
                <input type="text" value="<?=$user->fullname?>"class="form-control" name="fullname" placeholder="Введите ваше полное имя" required>
            </div>
            <div class="mb-3">
                <input type="text" value="<?=$user->text?>"class="form-control" name="text" placeholder="Введите ваш уникальный текст" required>
            </div>
            <div class="mb-3 ">
               <button class="btn btn-info">Изменить</button>
            </div>
        </form>     
    </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/auto/footer.php'?>

?>