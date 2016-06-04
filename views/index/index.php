<?php
/* @var $this yii\web\View */
?>
<h1>index/index</h1>

<?= \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
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
        'question:ntext',
        'answer:ntext',
    ],
]); ?>
