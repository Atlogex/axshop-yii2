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
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'userName', 'userEmail', 'userPassword'], 'required'],
            [['userId', 'userName', 'userEmail', 'userPassword'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'userName' => 'User Name',
            'userEmail' => 'User Email',
            'userPassword' => 'User Password',
        ];
    }
}
