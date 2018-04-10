<?php
namespace backend\models\form;
use yii\base\Model;

/**
 * Created by PhpStorm.
 * User: cuik
 * Date: 2018/3/21
 * Time: 15:39
 */

class VideoForm extends Model
{
    public $file;
    public $name;
    public $author;
    public $description;
    public $created_at;

    public function rules()
    {
        return [
          [['file'],'file','maxSize' => 1024*1024*30],//30M
          [['file', 'author'], 'required'],
          [['name'], 'string', 'max' => 255],
          [['description'], 'string'],
          [['created_at', 'author'],'integer'],
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'file' => '文件',
            'name' => '文件名称',
            'author' => '所有者',
            'description' => '描述',
            'created_at' => '添加时间'
        ];
    }
}