<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dymy_doctor_dep".
 *
 * @property string $id 主键
 * @property string $did 医生id
 * @property int $dep_id 科室部门id
 */
class DoctorDep extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dymy_doctor_dep';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['did', 'dep_id'], 'required'],
            [['did', 'dep_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'did' => 'Did',
            'dep_id' => 'Dep ID',
        ];
    }
}
