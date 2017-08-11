<?php var_dump($params); ?>
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
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="css/<?=$params['settings']['css']?>">
        <title></title>
    </head>
    <body>
        <div class="maindiv">
            <h2 style="text-align: center;">..:: MyShop ::..</h2>
            <div>
                <?php
                    //var_dump($params);
                    //print Templates\DefaultTemplate::class;
                    //echo '<br>';
                    //var_dump(get_loaded_extensions());
                    //echo '<br>';
                    //ini_set('soap.wsdl_cache_enabled', 0);
            
                    //$client = new SoapClient('https://market-test.ergohestia.pl/soa/pkt/soa.pkt.php?wsdl');
                    //print_r($client);
//                    //$variables = $client->__getLastResponse();
//                    $functions = $client->__getFunctions();
//                    var_dump($functions);
//
//                    //$functions[6]();
//
//                    header('Content-Type: text/plain');
//                    $rpc = "https://market-test.ergohestia.pl/soa/pkt/soa.pkt.php?wsdl";
//                    $clientRPC = new xmlrpc_client($rpc, true);
//                    $resp = $clientRPC->call('getPolisa(string $pxml)', array());
//                    print_r($resp);
                ?>
            </div>
            <div style="width: 90%; margin: auto;">
                <img src="images/landscape1.jpg" alt=""/>
            </div>
        </div>
        <script src="js/<?=$params['settings']['js']?>"></script>
    </body>
</html>
