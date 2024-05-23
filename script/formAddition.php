   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Добавление проверки</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
       <link rel="stylesheet" href="../style/styleAddingEditing.css">
   </head>

   <body>
       <!-- Форма добавления строк с бд -->
       <h2 class="titleAdd">Добавление проверки</h2>
       <div class="container">
           <form action="./create.php" method="post" class="formAdd">
           <div class="row block">
               <div class="col small-block">
                   <label for="check" class="textLable">Проверяемый СМП</label>
                   <!-- <h3>Проверяемый СМП</h3> -->
                   <input type="text" name="title" id="check">

               </div>

               <div class="col small-block">
                   <label for="supervisoryAuthority" class="textLable">Контролирующий орган</label>
                   <!-- <h3>Контролирующий орган</h3> -->
                   <input type="text" name="control" id="supervisoryAuthority">
               </div>

               <div class="col small-block">
                   <label for="beginning" class="textLable">Начало планового  периода проверки</label>
                   <!-- <h3>Начало планового периода проверки</h3> -->
                   <input type="date" name="beginningVerification" id="beginning">
               </div>

               <div class="col small-block">
                   <label for="ending" class="textLable">Окончание планового периода проверки</label>
                   <!-- <h3>Окончание планового периода проверки</h3> -->
                   <input type="date" name="endVerification" id="ending">
               </div>

               <div class="col small-block">
                   <label for="duration" class="textLable">Плановая длительность</label>
                   <!-- <h3>Плановая длительность</h3> -->
                   <input type="number" name="duration" id="duration">
               </div>
               </div>
               <br> <br>
               <div class="action row">
               <button type="reset" class="addCheck col">Очистить форму</button>
               <button type="submit" class="addCheck col">Сохранить форму</button>
               <!-- <button  href="../index.php"  type="button" class="addCheck col">Вернуться</button> -->
               <a href="../index.php" class="addCheck col">Вернуться</a>

               </div>
           </form>
       </div>
   </body>

   </html>