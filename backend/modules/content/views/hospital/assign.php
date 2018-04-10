<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Hospital */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hospital-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model,'hid')->hiddenInput(['value'=>$id])->label(false)?>

    <?php
        $parentData = \yii\helpers\ArrayHelper::map(\common\models\Department::find()->where(['pid'=>0])->all(),'id','name')
    ?>
    <?php
        foreach($parentData as $k=>$d) {
            ?>
            <label><?php echo $d;?></label>
            <?= $form->field($model, 'did')->checkboxList(\yii\helpers\ArrayHelper::map(\common\models\Department::find()->where(['pid'=>$k])->all(), 'id', 'name'))->label(false) ?>
            <?php
        }
    ?>
    <?php
/*        $parentData = \yii\helpers\ArrayHelper::map(\common\models\Department::find()->where(['pid'=>0])->all(),'id','name');
        $bigData = [];
        foreach($parentData as $k=>$v){
            $data = [];
            $data['label'] = $v;
            $data['content'] = $form->field($model,'did')->checkboxList(\yii\helpers\ArrayHelper::map(\common\models\Department::find()->where(['pid'=>$k])->all(),'id','name'))->label(false);
            if($k == 0) {
                $data['active'] = true;
            }
            $bigData[] = $data;
        }

    */?>

    <div class="form-group">
        <!--label class="control-label" for="hospital-did">科室</label-->
        <?php /*= \kartik\tabs\TabsX::widget([
            'position' => \kartik\tabs\TabsX::POS_LEFT,
            'align' => \kartik\tabs\TabsX::ALIGN_LEFT,
            'bordered'=>true,
            'items' => $bigData,
            'containerOptions' => ['style'=>'background:white'],
        ]);
        */?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
