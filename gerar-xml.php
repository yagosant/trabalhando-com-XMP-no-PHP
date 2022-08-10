<?php

//classe dom doc - nativa php, versão do MLX - encode usado
$dom = new DOMDocument('1.0', 'UTF-8');

//formata a saida do XML
$dom->formatOutput = true;

//no id
$idNodeValue = $dom->createTextNode(10);
$idNode = $dom->createElement('id');
$idNode->appendChild($idNodeValue);

//no email
$emailNodeValue = $dom->createTextNode('yagojf29@gmail.com');
$emailNode = $dom->createElement('email');
$emailNode->appendChild($emailNodeValue);

//no nome
//cdata usado para caracter especiais
$nomeNodeValue = $dom->createCDATASection('Yago Santos');
$nomeNode = $dom->createElement('nome');
$nomeNode->appendChild($nomeNodeValue);


//nó de usuario
$userNode = $dom->createElement('user');
$userNode->appendChild($idNode);
$userNode->appendChild($emailNode);
$userNode->appendChild($nomeNode);

//nó raiz ou principal, n possui conteudo - root
$rootNode = $dom->createElement('root');
$rootNode->appendChild($userNode);
//add no xml

$dom->appendChild($rootNode);

//evento do dom save xml, imprime XML da tela
/* echo $dom->saveXML();
echo $xml; */

//salva conteudo em um arquivo
$dom->save(__DIR__.'/arquivo.xml');