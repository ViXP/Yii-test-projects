<?php 
return [
	'id' => 'crmapp',
	'basePath' => realpath(__DIR__ . '/../'),
	'components' => [
		'cookieValidationKey' => 'yoursecretkeyhere',
		'db' => require(__DIR__ . '/db.php')
	]
];
?>