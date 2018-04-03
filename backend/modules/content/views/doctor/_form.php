<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Doctor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doctor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hid')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Hospital::find()->all(),'id','name'),['prompt' => ['text'=>'请选择', 'options'=>['value'=>0]]]) ?>



    <?= $form->field($model, 'did')->widget(\kartik\select2\Select2::className(),[
        'name' => 'kv_theme_select2',
        'data' => \yii\helpers\ArrayHelper::map(\common\models\Department::find()->all(),'id','name'),
        'theme' => \kartik\select2\Select2::THEME_KRAJEE, // this is the default if theme is not set
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true,
            'style'=>'display:block'
        ],
        'options'=>['style'=>'display:block']
    ])?>

    <?= $form->field($model, 'birthday')->widget(\kartik\datetime\DateTimePicker::className(),['value'=>0,
        'pluginOptions'=>[
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd',
            'minuteStep'=>30
        ]]) ?>

    <?= $form->field($model, 'gender')->textInput() ?>

    <?= $form->field($model, 'intro')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
