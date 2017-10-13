<?php

//namespace frontend\models;
namespace app\models;

use Yii;
//use yii\db\ActiveRecord;

class OrderList extends \yii\db\ActiveRecord
{

	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%orderList}}';
	}
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['code', 'name'], 'required'],
			[['population'], 'integer'],
			[['code'], 'string', 'max' => 2],
			[['name'], 'string', 'max' => 52],
		];
	}
	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'code' => 'Code',
			'name' => 'Name',
			'population' => 'Population',
		];
	}
}