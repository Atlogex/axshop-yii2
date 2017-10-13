<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\OrderList;
var_dump(1);
class OrderListController extends Controller
{
	public function actionIndex()
	{
		$query = OrderList::find();


		$pagination = new Pagination([
			'defaultPageSize' => 5,
			'totalCount' => $query->count(),
		]);

		$orders = $query->orderBy('name')
			->offset($pagination->offset)
			->limit($pagination->limit)
			->all();

		return $this->render('index', [
			'orders' => $orders,
			'pagination' => $pagination,
		]);
	}
}