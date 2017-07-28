<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Wróblewski Piotr - My Shop">
        <meta name="author" content="Wróblewski Piotr">
        <meta property="og:title" content="Wróblewski Piotr - My Shop">
        <meta property="og:image" content="https://wroblewskipiotr.pl/blackboard/icon.png">
        <meta property="og:description" content="Wróblewski Piotr - My Shop">
        <link rel="icon" href="icon.ico">
        <link rel="stylesheet" type="text/css" href="css/<?=$params['css']?>">
        <title><?=$params['pageTitle']?></title>
    </head>
    <body>
        <div class="maindiv">
            <h2>This is my shop!</h2>
            <img src="icon.ico" alt="" class="img-responsive"/>
            <p>Witaj <?=$params['imie']?> <?=$params['nazwisko']?> !</p>
        </div>
        <script src="js/<?=$params['js']?>"></script>
    </body>
</html>
