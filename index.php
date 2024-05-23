<?php

// подключаем файл
require_once 'config/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реестр плановых проверок</title>
    <!-- подключение bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./tableSearch/tableSearch.js"></script>
    <script src="./tableSearch/rrr.js"></script>
</head>
<style>
    th,
    td {
        padding: 10px;
    }

    th {
        background-color: #00CED1;
    }

    td {
        background-color: #AFEEEE;
    }
</style>

<body>


    <a href="./script/formAddition.php" class="formAddition">Добавить проверку</a>
    <!-- input для поиска по таблице -->
    <hr>
    <h3>Поиск</h3>
    <div class="container-fluid search">
        <input type="text" id="myInput" onkeyup="searchByName()" placeholder="Проверяемый СМП">
        <input type="text" id="myInputSupervisoryAuthority" onkeyup="searchBySupervisoryAuthority()" placeholder="Контролирующий орган">
        <input type="text" id="myInputBeginningVerification" onkeyup="searchByBeginningVerification()" placeholder="Начало проверки">
        <input type="text" id="myInputEndVerification" onkeyup="searchByEndVerification()" placeholder="Окончание проверки">
        <input type="number" id="myInputNumber" onkeyup="searchByNumber()" placeholder="Плановая длительность">
    </div>
    <hr>

    <div class="container-fluid">
        <div class="table-responsive">
            <!-- создание таблицы -->
            <!-- Атрибут data-filter-control="true" указывает на то, что элемент управления фильтра данных является активным и может быть использован для фильтрации данных. Атрибут data-show-search-clear-button="true" указывает на то, что кнопка очистки поиска будет показываться в элементе управления. -->
            <table class="table table-info table-striped table-hover  table-bordered " id="myTable" data-filter-control="true" data-show-search-clear-batton="true">
                <tr class="row  table-flex">
                    <th class="cell col-1">№</th>
                    <th class="cell col-2">Проверяемый СМП </th>
                    <th class="cell col-2">Контролирующий орган</th>
                    <th class="cell col-2">Начало планового периода проверки</th>
                    <th class="cell col-2">Окончание планового периода проверки</th>
                    <th class="cell col-1">Плановая длительность</th>
                    <th class="cell col-1">Изменить</th>
                    <th class="cell col-1">Удалить</th>
                </tr>



                <!-- Подлючение к базе данных для вывода информации строк -->
                <?php
                $point = mysqli_query($connect, "SELECT * FROM `the register of scheduled inspections`");
                // mysqli_fetch_all функция получает все строки преобразует в массив и присваивает переменной  $point
                $point = mysqli_fetch_all($point);
                // проходимся по массиву базы данных
                foreach ($point as $onePoint) {
                ?>
                    <!-- шаблон таблицы через которую при каждой итерации цикла выводятся значения -->
                    <tr class="row table-flex">
                        <td class="cell col-1"><?= $onePoint[0] ?></td>
                        <td class="cell col-2"><?= $onePoint[1] ?></td>
                        <td class="cell col-2"><?= $onePoint[2] ?></td>
                        <td class="cell col-2"><?= $onePoint[3] ?></td>
                        <td class="cell col-2"><?= $onePoint[4] ?></td>
                        <td class="cell col-1"><?= $onePoint[5] ?></td>
                        <!-- переносим для редактирования на другую страницу -->
                        <td class="cell col-1"><a href="./update.php?id=<?= $onePoint[0] ?>">
                                <svg width="800px" height="800px" viewBox="0 0 24 24" class="cross" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a></td>
                        <td class="cell col-1"><a href="./script/delete.php?id=<?= $onePoint[0] ?>">
                                <svg width="800px" height="800px" viewBox="0 0 24 24" class="cross" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 7H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6 7V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V7" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a></td>

                    </tr>
                    <!-- закрытие цикла -->
                <?php
                }
                ?>
            </table>
            <script>
                const tableRows = document.querySelectorAll('#myTable tr');

                let count = 0; // Начальное значение

                tableRows.forEach((row, index) => {
                    const firstCell = row.querySelector('td.cell');
                    if (firstCell) {
                        firstCell.textContent = count + 1; // Обновляем значение в первой ячейке
                        count++; // Увеличиваем счетчик
                    }
                });
            </script>

        </div>
        <!-- Форма добавления строк с бд -->
        <!-- <h2>Добавление проверки</h2>
    <form action="script/create.php" method="post">
        <h3>Проверяемый СМП</h3>
        <input type="text" name="title">
        <h3>Контролирующий орган</h3>
        <input type="text" name="control">
        <h3>Начало планового периода проверки</h3>
        <input type="date" name="beginningVerification">
        <h3>Окончание планового периода проверки</h3>
        <input type="date" name="endVerification">
        <h3>Плановая длительность</h3>
        <input type="number" name="duration">
        <br> <br>
        <button type="submit">Add</button>
    </form> -->

    </div>
</body>

</html>