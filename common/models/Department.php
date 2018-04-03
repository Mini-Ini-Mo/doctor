<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dymy_department".
 *
 * @property int $id 主键
 * @property string $name 类目名称
 * @property string $pid 上一级id:0顶级
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dymy_department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['pid'], 'integer'],
            [['name'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '科室',
            'pid' => '上级科室',
        ];
    }
}
