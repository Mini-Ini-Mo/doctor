<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dymy_article".
 *
 * @property int $id
 * @property string $title
 * @property int $author
 * @property string $content
 * @property int $created_at
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dymy_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['author', 'created_at'], 'integer'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'author' => '作者',
            'content' => '内容',
            'created_at' => '创建时间',
        ];
    }
}
