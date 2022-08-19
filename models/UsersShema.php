<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users_shema".
 *
 * @property int $id
 * @property string|null $user_name
 * @property string|null $shema_name
 */
class UsersShema extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_shema';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_name', 'shema_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_name' => 'User Name',
            'shema_name' => 'Shema Name',
        ];
    }
}
