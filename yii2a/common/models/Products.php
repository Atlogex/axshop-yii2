<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property integer $userId
 * @property integer $userName
 * @property integer $userEmail
 * @property integer $userPassword
 */
class Products extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%product}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['productId', 'name', 'title'], 'required'],
			[['productId'], 'integer'],
			[['productName', 'productTitle', 'productDescriptionShort'], 'string'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'productId' => 'User ID',
			'productName' => 'User Name',
			'productTitle' => 'User Email',
			'productDescriptionShort' => 'User Password',
		];
	}

}
