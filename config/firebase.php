<?php
require '../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$account = ServiceAccount::fromJsonFile('key.json');

$firebase = (new Factory)
	->withServiceAccount($account)
	->create();

$database = $firebase->getDatabase();

// $database->getReference('oksip')
// 	->set([
// 		'name' => 'ok',
// 		'what' => 'tf'
// 	]);

$reference = $database->getReference('oksip');

$value = $reference->getValue();

print_r($value);