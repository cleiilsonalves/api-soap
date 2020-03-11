<?php

include './lib/nusoap.php';

$clinte = new nusoap_client('http://localhost/api-soap/server.php?wsdl');

$parametros = array('nome'=> 'cleiilson',
        'idade'=>37);


 $result = $clinte->call('exemplo', $parametros);

 print_r ($result);
?>