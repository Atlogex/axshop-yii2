<?php
namespace common\widgets;

use Yii;

/**
* Output last products
*
* ```php
* Yii::$app->session->setFlash('error', 'This is the message');
* Yii::$app->session->setFlash('success', 'This is the message');
* Yii::$app->session->setFlash('info', 'This is the message');
* ```
*
* Multiple messages could be set as follows:
*
* ```php
* Yii::$app->session->setFlash('error', ['Error 1', 'Error 2']);
* ```
*
* @author Atlogex <mail@atlogex.ru>
*/
class ProductLast extends \yii\bootstrap\Widget
{
	public $message;

	public function init()
	{
		parent::init();
	}

	public function run()
	{
		return $this->render('productLast');
	}
}