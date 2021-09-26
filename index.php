<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ajax_test.com</title>
    <script src="js/jquery.js"></script>
</head>
<body>
<header class="header">
    <div class="container">
        
       <div class="view">
            <div class="tr">
                <h3>Группа</h3>
                <h3 >Имя</h3>
                <h3 >Фамилия</h3>
                <h3 >Дата рождения</h3>
            </div>
            <hr>
            <div class="view_data">
                
            </div>
       </div>
       <form>
            <input type='text' name='lrn_group' id='lrn_group'>
            <input type='text' name='fname' id='fname' >
            <input type='text' name='sname' id='sname' >
            <input type='date' name='birthdate' id='birthdate' >
            <button id="sendData" name="submit" class="add">Добавить</button>
        </form>
    </div>
</header>
<div class="message">
    <h4>Сообщение</h4><hr>
    <span></span>
</div>
<script src="js/main.js"></script>
</body>
</html>