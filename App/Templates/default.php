<!DOCTYPE html>
<html>
    <head>
        <base href="<?=BASE_HREF?>" target="_blank">
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Wróblewski Piotr - My Shop">
        <meta name="author" content="Wróblewski Piotr">
        <meta property="og:title" content="Wróblewski Piotr - My Shop">
        <meta property="og:image" content="https://wroblewskipiotr.pl/blackboard/icon.png">
        <meta property="og:description" content="Wróblewski Piotr - My Shop">
<!--        <link rel="icon" type="image/x-icon" href="<?=BASE_HREF?>favicon.ico" />-->
<!--        <link rel="shortcut icon" href="<?=BASE_HREF?>favicon.ico" type="image/x-icon" />-->
        <link rel="icon" type="image/png" href="favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/<?=$params['settings']['css']?>">
        <script src="js/<?=$params['settings']['head_js']?>"></script>
        <title><?=$params['settings']['pageTitle']?></title>
    </head>
    <body>
        <div class="maindiv">
            <h2 style="text-align: center;">..:: MyShop ::..</h2>
            <div>
                <?php
                    //var_dump($params);
                ?>
            </div>
            <div style="width: 90%; margin: auto;">
                <h3 style="text-align: center">Scan this QR Code to see what's going on !</h3>
<!--                <img src="images/landscape1.jpg" alt=""/>-->
                <img style="position:absolute;left:50%;margin-left:-50px; margin-top: 20px;" src="qrcode.png" alt="QR Code"/>
            </div>
        </div>
        <script src="js/<?=$params['settings']['body_js']?>"></script>
    </body>
</html>
