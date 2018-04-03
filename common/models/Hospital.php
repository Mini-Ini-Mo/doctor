<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dymy_hospital".
 *
 * @property string $id 主键
 * @property string $name 医院名称
 * @property string $intro 医院简介
 * @property string $address 医院地址
 * @property string $tel 联系电话
 * @property int $grader 医院等级
 */
class Hospital extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dymy_hospital';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'grader'], 'required'],
            [['intro'], 'string'],
            [['grader'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 64],
            [['tel'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '医院',
            'intro' => '简介',
            'address' => '地址',
            'tel' => '联系电话',
            'grader' => '医院等级',
        ];
    }
}
