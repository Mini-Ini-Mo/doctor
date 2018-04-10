<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Grader */

$this->title = '添加';
$this->params['breadcrumbs'][] = ['label' => '级别列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grader-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
