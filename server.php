<?php

include './lib/nusoap.php';

$servidor = new nusoap_server();

$servidor->configureWSDL('urn:servidor');
$servidor->wsdl->schemaTargetNamespace = 'urn:Servidor';

function exemplo($nome, $idade){

    return ($nome .' - '.$idade);

}
 $servidor->register(
    'exemplo', 
    array('nome'=> 'xsd:string',
            'idade'=> 'xsd:int'),
            
    array('retorno'=>'xsd:string'),
    'urn:Servidor.exemplo',
    'urn:Servidor.exemplo',
    'rpc',
    'encoded',
    'apenas um exemplo soap php'


 );

$request = file_get_contents("php://input");

  $f = fopen('conteudo.txt', 'a+');
 fwrite($f,date('h:i:s')."/n");
 fwrite($f, $request);
 fclose($f); 
 $servidor->service($request);




?>
