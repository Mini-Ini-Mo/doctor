<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Doctor */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Doctors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doctor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'position',
            ['attribute'=>'hid','value'=>function($model){
                $data = \common\models\Hospital::find()->where(['id'=>$model->hid])->one();
                return $data['name'];
            }],
            'birthday',
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
            'intro:ntext',
        ],
    ]) ?>

</div>
