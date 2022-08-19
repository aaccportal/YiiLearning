<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dev_shemas".
 *
 * @property int $shema_id
 * @property string|null $name
 * @property string|null $description
 */
class DevShemas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dev_shemas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'shema_id' => 'Shema ID',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }
}
