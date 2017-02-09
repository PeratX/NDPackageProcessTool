<?php
if(!isset($argv[1]))
{
	die('Usage: '.$argv[0].' <Phar File>');
}
if(ini_get('phar.readonly'))
{
	die('Plesae set phar.readonly to Off in php.ini.');
}
$phar=new Phar($argv[1]);
$phar->setStub('<?php define("itxtech\\\\necrodancer\\\\PATH","phar://".__FILE__."/");require_once("phar://".__FILE__."/src/itxtech/necrodancer/Necrodancer.php");__HALT_COMPILER();');
var_dump($phar->getMetadata());
$phar->setMetadata([
	"name" => "iTXTech Necrodancer",
	"version" => "1.0.0",
	"api" => 1,
	"creationDate" => time()
]);
var_dump($phar->getMetadata());
unset($phar);
echo("Processed.\n");
