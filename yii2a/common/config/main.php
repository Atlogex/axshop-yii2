<?php
return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
		'view' => [
			'theme' => [
				'basePath' => '@frontend/themes/axy2shop',
				'baseUrl' => '@frontend/themes/axy2shop',
				'pathMap' => [
					'@app/views' => '@frontend/themes/axy2shop',
					'@app/widgets' => '@frontend/themes/axy2shop/widgets',
				],
			],
		],
	],
];
