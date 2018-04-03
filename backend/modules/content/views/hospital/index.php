<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\HospitalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hospitals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hospital-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hospital', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'intro:ntext',
            'address',
            'tel',
            //'grader',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
