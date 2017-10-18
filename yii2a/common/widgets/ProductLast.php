<?php
namespace common\widgets;

use Yii;
use yii\base\Widget;

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
class ProductLast extends Widget
{
	public $message;

	public function init()
	{
		parent::init();
	}

	public function run()
	{
		$data['lastProducts'] = [
			'error' => 'alert-danger',
			'danger' => 'alert-danger',
			'success' => 'alert-success',
			'info' => 'alert-info',
			'warning' => 'alert-warning'
		];
		return $this->render('plast', $data);
//		return $this->render('plast',  ['error' => 'alert-danger']);
//		return parent::render('plast',  ['error' => 'alert-danger']);
//		return 'hhh';
	}
}
