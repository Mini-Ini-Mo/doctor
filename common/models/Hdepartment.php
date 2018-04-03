<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dymy_hdepartment".
 *
 * @property int $id 主键
 * @property string $name 类目名称
 * @property int $pid 上一级id:0顶级
 */
class Hdepartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dymy_hdepartment';
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
            'name' => 'Name',
            'pid' => 'Pid',
        ];
    }
}
