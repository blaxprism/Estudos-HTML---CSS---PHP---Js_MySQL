<?php
// insere a classe
include_once 'classes/Produto.class.php';

// cria dois objetos
$produto1 = new Produto;
$produto2 = new Produto;

//atribuir valores
$produto1 -> Codigo = 4001;
$produto1 -> Descricao = 'Enemy music with JID';

$produto2 -> Codigo = 4002;
$produto2 -> Descricao = 'Enemy music IMAGINE DRAGONS';

//imprime as informações da etiqueta
$produto1 -> ImprimeEtiqueta();
$produto2 -> ImprimeEtiqueta();
?>