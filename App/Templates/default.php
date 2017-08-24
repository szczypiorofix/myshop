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
        <link rel="icon" type="image/png" href="icon.png" />
        <script src="js/<?=$params['settings']['head_js']?>"></script>
        <title><?=$params['settings']['pageTitle']?></title>
        <link rel="stylesheet" type="text/css" href="css/<?=$params['settings']['css']?>">
        <link rel="stylesheet" href="css/font-awesome.min.css">
    </head>
    <body>
        <div class="navbar">
            <a class="navbar-btn" href="/myshop">..:: MyShop ::..</a>
            <input type="text" class="navbar-input" placeholder="Szukaj...">
            <button class="navbar-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
            <a class="navbar-btn" href="/myshop/contact">Kontakt</a>
        </div>
        <div class="maindiv">
            <div class="jumbotron">
                A tutaj będzie jakiś Jumbotron lub slider, albo i jedno i drugie ;)
            </div>
            <div class="mainpanel">
            <?php
                echo $output;
            ?>
            </div>
            <div class="sidebar">
                <div class="sidebar-content">
                    <h3>Prognoza pogody:</h3>
                    <div id="spinner">
                    </div>
                    <div id="weather_forecast">
                    </div>
                </div>
            </div>
        </div>
    
        <div class="footer">
            <p>Wróblewski Piotr 2017. All rights reserved.</p>
        </div>
        
        
        <script src="js/<?=$params['settings']['body_js']?>"></script>
    </body>
</html>
