<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dymy_hospital_dep".
 *
 * @property string $id 主键
 * @property string $hid 医院id
 * @property int $dep_id 科室部门id
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
            [['hid', 'dep_id'], 'required'],
            [['hid', 'dep_id'], 'integer'],
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
            'dep_id' => 'Dep ID',
        ];
    }
}
