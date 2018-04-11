<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dymy_doctor".
 *
 * @property string $id 主键
 * @property string $name 医生名字
 * @property string $img
 * @property string $position
 * @property string $hid 所属医院
 * @property string $birthday 生日
 * @property string $gender 0未知1男2女
 * @property string $intro 简介
 * @property int $did 科室
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
            [['hid', 'gender', 'did'], 'integer'],
            [['birthday'], 'safe'],
            [['intro'], 'string'],
            [['name'], 'string', 'max' => 40],
            [['img', 'position'], 'string', 'max' => 255],
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
            'img' => '头像',
            'position' => '职位',
            'hid' => '所属医院',
            'birthday' => '出生日期',
            'gender' => '性别',
            'intro' => '简介',
            'did' => '科室',
        ];
    }
    
    //获取所属医院
    public function getHospital()
    {
         return $this->hasOne(Hospital::className(), ['id' => 'hid'])->select(['name','id']);
    }
    
    //获取所属科室
    public function getDep()
    {
        return $this->hasOne(Department::className(), ['id' => 'did'])->select(['name','id']);
    }
    
    //获取发表文章
    public function getArticle()
    {
        return $this->hasMany(Article::className(), ['author' => 'id']);
    }
    
    
    
}
