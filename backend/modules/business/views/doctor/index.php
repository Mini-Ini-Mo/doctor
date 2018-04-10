<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\DoctorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '医生列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doctor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加医生', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'position',
            ['attribute'=>'hid','value'=>function($model){
                $data = \common\models\Hospital::find()->where(['id'=>$model->hid])->one();
                return $data['name'];
            }],
            //'birthday',
            ['attribute'=>'did','value'=>function($model){
                $data = \common\models\Department::find()->where(['id'=>$model->did])->one();
                return $data['name'];
            }],
            ['attribute'=>'gender','value'=>function($model){
                if($model->gender == 1) {
                    return '男';
                }else if($model->gender == 2)
                {
                    return '女';
                }
            }],
            //'intro:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
