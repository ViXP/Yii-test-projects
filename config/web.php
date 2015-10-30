<?php 
return [
	'id' => 'crmapp',
	'basePath' => realpath(__DIR__ . '/../'),
	'components' => [
		'request' => [
   			'enableCookieValidation' => false,
    		'enableCsrfValidation' => false,
		],
		'db' => require(__DIR__ . '/db.php'),
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false
		]
	]
];
?>