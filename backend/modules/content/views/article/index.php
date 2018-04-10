<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            ['attribute'=>'author','value'=>function($model){
                $data = \common\models\Doctor::findOne($model->author);
                return $data['name'];
            }],
            //'content:ntext',
            ['attribute'=>'created_at','value'=>function($model){
                return date('Y-m-d H:i:s',$model->created_at);
            }],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
