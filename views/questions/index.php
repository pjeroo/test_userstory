<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Questions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Questions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            [
                'attribute' => 'category_id',
                'label' => 'Категория',
                'format' => 'text',
                'content' => function($data) {
                    return $data->category->title;
                }
            ],
            'question:html',
            'answer:html',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
