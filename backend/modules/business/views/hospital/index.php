<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\HospitalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '医院列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hospital-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加医院', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            //'intro:ntext',
            'address',
            'tel',
            //'grader',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {assign}',
                'buttons' => [
                    'assign' => function ($url, $model, $key) {
                        return  Html::a('<span class="glyphicon glyphicon-log-in"></span>', $url, ['title' => '分配科室','style'=>'margin:0px 6px;'] ) ;
                    },
                ],
                'headerOptions' => ['width' => '180']
            ],
        ],
    ]); ?>
</div>
