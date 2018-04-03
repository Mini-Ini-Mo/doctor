<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Grader */

$this->title = 'Update Grader: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Graders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grader-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
