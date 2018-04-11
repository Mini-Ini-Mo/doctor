<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Hospital */
/* @var $form yii\widgets\ActiveForm */

$this->title = '分配科室';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="hospital-form">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model,'hid')->hiddenInput(['value'=>$id])->label(false)?>

    <?php
    $arr = \yii\helpers\ArrayHelper::map(\common\models\Department::find()->where(['pid'=>0])->all(),'id','name');
    $data = [];
    foreach($arr as $k=>$d){
        $data[$d] = \yii\helpers\ArrayHelper::map(\common\models\Department::find()->where(['pid'=>$k])->all(),'id','name');
    }
    ?>
    <?= $form->field($model, 'level')->widget(\kartik\select2\Select2::className(),[
        'name' => 'kv_theme_select2',
        'data' => $data,
        //'theme' => \kartik\select2\Select2::THEME_KRAJEE, // this is the default if theme is not set
        'pluginOptions' => [
            'allowClear' => true,
            'multiple' => true,
            'style'=>'display:block;margin-top:0px',
        ],
        'options'=>['style'=>'display:block','placeholder' =>'请选择','value'=>\yii\helpers\ArrayHelper::map(\common\models\HospitalDep::find()->where(['hid'=>$id,'level'=>2])->all(),'id','did')]
    ])->label('主打科室')?>

    <?= $form->field($model, 'did')->checkboxList(\yii\helpers\ArrayHelper::map(\common\models\Department::find()->where('pid!=0')->all(), 'id', 'name'),['value'=>\yii\helpers\ArrayHelper::map(\common\models\HospitalDep::find()->all(),'id','did')])->label('科室') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
