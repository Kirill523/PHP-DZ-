<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/auto/header.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/auto/db.php';
$id=($_SESSION['id']);
$sql="SELECT fullname, text FROM `users` WHERE `id` = $id";
$result=$connect->query($sql);
$user=$result->fetch_object();
?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/auto/alerts.php'?>
<div class="container">
    <div class="row mt-5">
        <h1>Добро пожаловать <?= $user->fullname?> !</h1>
        <h2><?= $user->text?></h2>
        <a href="edit.php?id=<?= $id?>" class=" btn btn-primary">Изменить данные</a>
        <a href="delete.php?id=<?= $id?>" class=" btn btn-danger">Удалить пользователя из базы данных</a>
        <a href="index.php" class=" btn btn-warning">Выйти</a>
        </form>
    </div>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/auto/footer.php'?>
