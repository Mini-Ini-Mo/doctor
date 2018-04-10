<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .select2-container .select2-selection--single .select2-selection__rendered{margin-top:0px}
</style>
<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->widget(\kartik\select2\Select2::className(),[
        'name' => 'kv_theme_select2',
        'data' => \yii\helpers\ArrayHelper::map(\common\models\Doctor::find()->all(),'id','name'),
        'pluginOptions' => [
            'allowClear' => true,
            'style'=>'display:block;margin-top:0px',
        ],
        'options'=>['style'=>'display:block','placeholder' =>'请选择']
    ]) ?>

    <?= $form->field($model, 'content')->widget('common\widgets\ueditor\Ueditor',[
        'options' => [
            'initialFrameWidth' => 850,
            'initialFrameHeight' => 300,
        ]
    ]); ?>

    <?= $form->field($model, 'created_at')->hiddenInput(['value'=>time()])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
