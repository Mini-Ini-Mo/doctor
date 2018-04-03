<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dymy_grader".
 *
 * @property int $id 主键
 * @property string $name 等级名称
 */
class Grader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dymy_grader';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '级别',
        ];
    }
}
