<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dymy_hospital_type".
 *
 * @property string $id 主键
 * @property string $hid 医院id
 * @property int $tid 类目id
 */
class HospitalType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dymy_hospital_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hid', 'tid'], 'required'],
            [['hid', 'tid'], 'integer'],
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
            'tid' => 'Tid',
        ];
    }
}
