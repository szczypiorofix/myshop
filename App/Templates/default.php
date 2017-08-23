<!DOCTYPE html>
<html>
    <head>
        <base href="<?=BASE_HREF?>">
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Wróblewski Piotr - My Shop">
        <meta name="author" content="Wróblewski Piotr">
        <meta property="og:title" content="Wróblewski Piotr - My Shop">
        <meta property="og:image" content="https://www.wroblewskipiotr.pl/myshop/public/logo.jpg">
        <meta property="og:description" content="Wróblewski Piotr - My Shop">
<!--        <link rel="icon" type="image/x-icon" href="<?=BASE_HREF?>favicon.ico" />-->
<!--        <link rel="shortcut icon" href="<?=BASE_HREF?>favicon.ico" type="image/x-icon" />-->
        <link rel="icon" type="image/png" href="icon.png" />
        <link rel="stylesheet" type="text/css" href="css/<?=$params['settings']['css']?>">
        <script src="js/<?=$params['settings']['head_js']?>"></script>
        <title><?=$params['settings']['pageTitle']?></title>
    </head>
    <body>
        <div class="maindiv">
            <div class="navbar">
                <a class="title" href="/myshop">..:: MyShop ::..</a>
                <div class="input-group">
                    <input class="search-input" type="text"></li>
                    <input class="search-button" type="button" value="Szukaj"></li>
                    <a href="#">Contact</a></li>
                </div>
            </div>
            
            <div> 
                <?php
                     echo $output;
                ?>
            </div>
        </div>
        <script src="js/<?=$params['settings']['body_js']?>"></script>
    </body>
</html>
