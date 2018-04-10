<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Department */

$this->title = '添加';
$this->params['breadcrumbs'][] = ['label' => '科室列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
