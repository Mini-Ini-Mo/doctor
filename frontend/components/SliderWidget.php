<?php

/**
* 
* @author lyy
* @date 2018年4月3日下午3:32:11
*/
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class SliderWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {
        return Html::encode($this->message);
    }
}