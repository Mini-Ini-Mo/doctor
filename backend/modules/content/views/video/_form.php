<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Video */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="video-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'file')->fileInput(['maxlength' => true,'class'=>'form-control','multiple' => true]) ?>

    <?= $form->field($model, 'author')->widget(\kartik\select2\Select2::className(),[
        'name' => 'kv_theme_select2',
        'data' => \yii\helpers\ArrayHelper::map(\common\models\Doctor::find()->all(),'id','name'),
        'pluginOptions' => [
            'allowClear' => true,
            'style'=>'display:block;margin-top:0px',
        ],
        'options'=>['style'=>'display:block','placeholder' =>'请选择']
    ]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->hiddenInput(['value'=>time()])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
