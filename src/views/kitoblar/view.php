<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Books */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Books'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="books-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= \kartik\detail\DetailView::widget([
        'model' => $model,
        'panel' => [
            'type' => 'success',
            'heading' => '<i class="fa fa-book"></i>Kitob haqida',
            'footer' => '<div class="text-center text-muted">This is a sample footer message for the detail view.</div>'
        ],
        'attributes' => [
            [
                'group'=>true,
                'label'=>"Kitobning asosiy ma'lumotlari",
                'rowOptions'=>['class'=>'text-center table-info']
            ],
            [
                'columns' => [
                    [
                        'attribute'=>'id',
                        'label'=>'Book #',
                        'displayOnly'=>true,
//                        'valueColOptions'=>['style'=>'width:30%']
                    ],
                ],
            ],
            'name',
            'authors',
            'status',
            'read_count',
            'price',
            'year',
            'ISBN',
        ],
    ]) ?>

</div>
