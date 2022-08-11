<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/auto/header.php';
            require_once $_SERVER['DOCUMENT_ROOT'].'/auto/session.php';?>
<div class="container">
    <div class="row mt-5">
        <h1>Добро пожаловать !</h1>
        <h2>Введите свои данные для авторизации или зарегистрируйтесь.</h2>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/auto/alerts.php'?>
        <form method="POST" action="authorization.php">
            <div class="mb-3">
                <input type="text" class="form-control" name="email" placeholder="Введите адрес электронной почты" required>
            </div>
            <div class="mb-3">
                <input type="password"  class="form-control" name="password" placeholder="Введите ваш пароль" required>
            </div>
            <div class="mb-3">
               <button class="btn btn-success">Войти</button>
            </div>
        </form>
        <form action="regest.php" method="post">
        <button class=" btn btn-primary">Зарегистрироваться</button>
        </form>

    </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/auto/footer.php'?>

?>