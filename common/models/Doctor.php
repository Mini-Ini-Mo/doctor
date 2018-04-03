<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dymy_doctor".
 *
 * @property string $id 主键
 * @property string $name 医生名字
 * @property string $position
 * @property string $hid 所属医院
 * @property string $birthday 生日
 * @property int $gender 0未知1男2女
 * @property string $intro 简介
 */
class Doctor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dymy_doctor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['hid', 'gender'], 'integer'],
            [['birthday'], 'safe'],
            [['intro'], 'string'],
            [['name'], 'string', 'max' => 40],
            [['position'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '姓名',
            'position' => '职位',
            'hid' => '所属医院',
            'birthday' => '出生日期',
            'gender' => '性别',
            'intro' => '简介',
        ];
    }
}
