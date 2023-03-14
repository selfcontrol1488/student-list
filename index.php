<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php 
        session_start();
        $err = [];
        if(empty($_SESSION['POST'])) {
            $err['name'] = '';
            $err['surname'] = '';
            $err['groupNumber'] = '';
            $err['email'] = '';
            $err['amount'] = '';
        }
        else {
            $err = $_SESSION['POST'];
        }   
    ?>



    <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center mt-3">
        <?php if (isset($_COOKIE["key"])): ?>
            <h4 class="text-center">Форма редактирования данных:</h4>
        <?php else: ?>
            <h4 class="text-center">Регистрация:</h4> 
        <?php endif; ?>
        </div>
    <hr/>
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <form name="registration" method="POST" action="app/controlles/signup.php">
                    <div class="form-group mb-3">
                        <label class="form-label">Имя</label>
                        <input type="text" class="form-control" name="name" placeholder="Имя не более 25-ти символов">
                        <div class="validationError" class="form-text --bs-danger"><?php echo $err['name']?></div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Фамилия</label>
                        <input type="text" class="form-control" name="surname" placeholder="Фамилия не более 25-ти символов">
                        <div class="validationError" class="form-text"><?php echo $err['surname']?></div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Номер группы</label>
                        <input type="text" class="form-control" name="groupNumber">
                        <div class="validationError" class="form-text"><?php echo $err['groupNumber']?></div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email">
                        <div class="validationError" class="form-text"><?php echo $err['email']?></div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Количество баллов</label>
                        <input type="text" class="form-control" name="amount">
                        <div class="validationError" class="form-text"><?php echo $err['amount']?></div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="container">
                            <div class="row">
                                <button button type="submit" class="btn btn-primary mb-3">Отправить</button>
                                <a href="views/list.php" class="btn btn-primary">Список абитуриентов</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
        <?php if (isset($_GET["notify"]) && $_GET["notify"] == 'registered' && !empty($_COOKIE["key"])): ?>
            <p class="text-center">Вы успешно внесли свои данные!</p>
        <?php elseif (isset($_GET["notify"]) && $_GET["notify"] == 'edited' && !empty($_COOKIE["key"])): ?>
            <p class="text-center">Вы успешно внесли изменения в свои данные!</p>
        <?php endif; ?>
        </div>
    </div>
    <?php 
        unset($_SESSION['POST']);
    ?>
</body>
</html>