<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $name
 * @property string $file
 * @property int $size
 * @property string $type 类型:img,file,tar
 * @property int $author
 * @property string $description
 * @property int $created_at
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file', 'author'], 'required'],
            [['size', 'author', 'created_at'], 'integer'],
            [['description'], 'string'],
            [['name', 'file'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '标题',
            'file' => '文件',
            'size' => '大小',
            'type' => '类型',
            'author' => '所有者',
            'description' => '描述',
            'created_at' => '添加时间',
        ];
    }
}
