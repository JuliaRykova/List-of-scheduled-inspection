<!-- страница редактирования проверки -->

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require_once './config/connect.php';
$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `the register of scheduled inspections` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);
// print_r($product);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/styleAddingEditing.css">
</head>

<body>
    <!-- Форма  редактирования -->
    <h2 class="titleAdd">Редактирование проверки</h2>
    <div class="container">
        <form action="script/update.php" method="post" class="formAdd">
            <div class="row block">
                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                <div class="col small-block">
                    <label for="check" class="textLable">Проверяемый СМП</label>
                    <input type="text" id="check" name="title" value="<?= $product['title'] ?>">
                </div>
                <div class="col small-block">
                    <label for="supervisoryAuthority" class="textLable">Контролирующий орган</label>
                    <input type="text" id="supervisoryAuthority" name="control" value="<?= $product['control'] ?>">
                </div>
                <div class="col small-block">
                    <label for="beginning" class="textLable">Начало планового периода проверки</label>
                    <input type="date" id="beginning" name="beginningVerification" value="<?= $product['beginningVerification'] ?>">
                </div>
                <div class="col small-block">
                    <label for="ending" class="textLable">Окончание планового периода проверки</label>
                    <input type="date" id="ending" name="endVerification" value="<?= $product['endVerification'] ?>">
                </div>
                <div class="col small-block">
                    <label for="duration" class="textLable">Плановая длительность</label>
                    <input type="number" id="duration" name="duration" value="<?= $product['duration'] ?>">
                </div>
            </div>
            <br> <br>
            <div class="action row">
                <button type="submit" class="addCheck col">Сохранить форму</button>
                <a href="../index.php" class="addCheck col">Вернуться</a>
            </div>
        </form>
    </div>
</body>

</html>