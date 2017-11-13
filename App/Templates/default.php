<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Store">
    <head>
        <base href="<?=BASE_HREF?>">
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?=$params['settings']['pageTitle']?></title>
        <meta name="description" content="Wróblewski Piotr - My Shop">
        <meta name="author" content="Wróblewski Piotr">
        <meta name="description" content="Page description. No longer than 155 characters." />

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="The Name or Title Here">
        <meta itemprop="description" content="This is the page description">
        <meta itemprop="image" content="https://www.wroblewskipiotr.pl/myshop/myshop-logo.png">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@szczypiorofix">
        <meta name="twitter:title" content="<?=$params['settings']['pageTitle']?>">
        <meta name="twitter:description" content="Page description less than 200 characters">
        <meta name="twitter:creator" content="@szczypiorofix">
        <meta name="twitter:image" content="https://www.wroblewskipiotr.pl/myshop/myshop-logo.png">
        <meta name="twitter:data1" content="$3">
        <meta name="twitter:label1" content="Price">
        <meta name="twitter:data2" content="Black">
        <meta name="twitter:label2" content="Color">

        <!-- Open Graph data -->
        <meta property="og:title" content="Wróblewski Piotr - My Shop">
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.example.com/" />
        <meta property="og:image" content="https://www.wroblewskipiotr.pl/myshop/myshop-logo.png">
        <meta property="og:description" content="Wróblewski Piotr - My Shop">
        <meta property="og:site_name" content="Wróblewski Piotr - My Shop" />
        <meta property="og:price:amount" content="15.00" />
        <meta property="og:price:currency" content="USD" />


        <link rel="icon" type="image/png" href="icon.png" />
        <?php 
            foreach($params['settings']['head_js'] as $script) {
                echo "<script src=".BASE_HREF."js/".$script."></script>";
            }
            echo '<script>'.$params['settings']['head_script'].'</script>';
        ?>

        <link rel="stylesheet" type="text/css" href="<?=BASE_HREF?>/css/normalize.css">
        
        <?php 
            foreach($params['settings']['css'] as $css_file) {
                echo '<link rel="stylesheet" type="text/css" href="'.BASE_HREF.'/css/'.$css_file.'?v=3">';
            }
        ?>
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
        
        <!-- ########## JQUERY 3.2.1 SCRIPT ########## -->
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

        <!-- ########## APP SCRIPTS ########## -->
        <?php 
            foreach($params['settings']['body_js'] as $script) {
                echo "<script src=".BASE_HREF."js/".$script."></script>";
            }
            echo '<script>'.$params['settings']['body_script'].'</script>';
        ?>
    </body>
</html>
