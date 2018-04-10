<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Hospital */

$this->title = '添加';
$this->params['breadcrumbs'][] = ['label' => '医院列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hospital-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
