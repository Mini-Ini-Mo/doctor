<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dymy_hospital_dep".
 *
 * @property string $id 主键
 * @property string $hid 医院id
 * @property string $did 科室部门id
 * @property int $level 1,2
 */
class HospitalDep extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dymy_hospital_dep';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hid', 'did'], 'required'],
            [['hid', 'did', 'level'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hid' => 'Hid',
            'did' => 'Did',
            'level' => 'Level',
        ];
    }
}
