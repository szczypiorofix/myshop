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
        <?php 
            foreach($params['settings']['head_js'] as $script) {
                echo "<script src=".BASE_HREF."js/".$script."></script>";
            }
            echo '<script>'.$params['settings']['head_script'].'</script>';
        ?>
        <title><?=$params['settings']['pageTitle']?></title>
        <link rel="stylesheet" type="text/css" href="<?=BASE_HREF?>/css/<?=$params['settings']['css']?>">
        <link rel="stylesheet" href="<?=BASE_HREF?>/css/font-awesome.min.css">
    </head>
    <body>
        <?=$page['navbar'];?>
        <div class="maindiv">
            <?=$page['jumbotron'];?>
            <?=$page['mainpanel'];?>
            <?=$page['sidebar'];?>
        </div>
        <?=$page['footer'];?>
        
        <?php 
            foreach($params['settings']['body_js'] as $script) {
                echo "<script src=".BASE_HREF."js/".$script."></script>";
            }
            echo '<script>'.$params['settings']['body_script'].'</script>';
        ?>
    </body>
</html>
