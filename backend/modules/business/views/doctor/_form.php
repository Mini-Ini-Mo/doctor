<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Doctor */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .select2-container .select2-selection--single .select2-selection__rendered{margin-top:0px}
</style>
<div class="doctor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->widget('common\widgets\file_upload\FileUpload',['config'=>['suggest'=>"仅支持文件格式为jpg、jpeg、png以及gif<br>大小在1MB以下的文件<br/>建议尺寸：160*100px"]]); ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hid')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Hospital::find()->all(),'id','name'),['prompt' => ['text'=>'请选择', 'options'=>['value'=>0]]]) ?>


    <?php
        $arr = \yii\helpers\ArrayHelper::map(\common\models\Department::find()->where(['pid'=>0])->all(),'id','name');
        $data = [];
        foreach($arr as $k=>$d){
            $data[$d] = \yii\helpers\ArrayHelper::map(\common\models\Department::find()->where(['pid'=>$k])->all(),'id','name');
        }
    ?>
    <?= $form->field($model, 'did')->widget(\kartik\select2\Select2::className(),[
        'name' => 'kv_theme_select2',
        'data' => $data,
        //'theme' => \kartik\select2\Select2::THEME_KRAJEE, // this is the default if theme is not set
        'pluginOptions' => [
            'allowClear' => true,
            'style'=>'display:block;margin-top:0px',
        ],
        'options'=>['style'=>'display:block','placeholder' =>'请选择']
    ])?>

    <?= $form->field($model, 'birthday')->widget(\kartik\datetime\DateTimePicker::className(),['value'=>0,
        'pluginOptions'=>[
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd',
            'minuteStep'=>30
        ]]) ?>

    <?= $form->field($model, 'gender')->dropDownList(['1'=>'男','2'=>'女'],['prompt'=>'请选择','options'=>['value'=>0]]) ?>

    <?= $form->field($model, 'intro')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
