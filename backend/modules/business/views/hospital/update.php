<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Hospital */

$this->title = '修改: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => '医院列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hospital-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
