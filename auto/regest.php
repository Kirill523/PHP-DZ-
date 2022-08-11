<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/auto/header.php';?>
<div class="container">
    <div class="row mt-5">
        <h2>Заполните данные для регистрации</h2>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/auto/alerts.php'?>
        <form method="POST" action="regestration.php">
            <div class="mb-3">
                <input type="text" class="form-control" name="email" placeholder="Введите адрес электронной почты" required>
            </div>
            <div class="mb-3">
                <input type="password"  class="form-control" name="password" placeholder="Введите ваш пароль" required>
            </div>
            <div class="mb-3">
                <input type="password"  class="form-control" name="password2" placeholder="Повторно введите ваш пароль" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="fullname" placeholder="Введите ваше полное имя" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="text" placeholder="Введите ваш уникальный текст" required>
            </div>
            <div class="mb-3 d-flex justify-content-between">
               <button class="btn btn-info">Зарегистрироваться</button>
            </div>
        </form>     
    </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/auto/footer.php'?>

