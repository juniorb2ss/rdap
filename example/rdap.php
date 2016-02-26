<?php
// bootstrap
include '../vendor/autoload.php';

$app = rdap\Reflect::fire(
	new rdap\Services\Registrobr,
	new rdap\Bag\Cache,
	new rdap\Parser\Parser,
	new rdap\Transport\Request
);

$app->setUrl('https://rdap.registro.br/domain/google.com.br')->details();
var_dump( $app->service->nameservers() );