<?php
return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
		'view' => [
			'theme' => [
				'basePath' => '@app/themes/axy2shop',
				'baseUrl' => '@app/themes/axy2shop',
				'pathMap' => [
					'@app/views' => '@frontend/themes/axy2shop',
					'@app/modules' => '@frontend/themes/axy2shop/modules',
					'@common/widgets' => '@frontend/themes/axy2shop/widgets',// <-- !!!
					'@app/widgets' => '@frontend/themes/axy2shop/widgets',// <-- !!!
//					'@app/widgets' => '@app/themes/axy2shop/widgets',
//					'@app/views/widgets' => '@frontend/themes/axy2shop/widgets',
				],
			],
		],
	],
];
