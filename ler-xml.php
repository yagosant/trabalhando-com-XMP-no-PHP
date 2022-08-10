<?php

//guarda o conteudo do XML
/* $string = '<?xml version="1.0" encoding="UTF-8"?>
<root>
  <user>
    <id>10</id>
    <email>yagojf29@gmail.com</email>
    <nome><![CDATA[Yago Santos]]></nome>
  </user>
</root>
'; */

//simple xml - le o xml com base numa string
//$xml = simplexml_load_string($string);

//carrega o xml com base em um arquivo
$xml = simplexml_load_file(__DIR__.'/arquivo.xml');

//dados xml
echo 'id: '.$xml->user->id."\n";
echo 'email: '.$xml->user->email."\n";
echo 'nome: '.$xml->user->nome."\n";


/* echo '<pre>';
print_r($xml);
echo '</pre>';exit; */