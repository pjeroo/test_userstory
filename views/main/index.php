<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\QuestionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('base', 'label-questions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('base', 'label-create-question'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            [
                'attribute' => 'category_id',
                'label' => Yii::t('base', 'label-category'),
                'format' => 'text',
                'content' => function($data) {
                    return Html::a($data->category->title, Url::toRoute([
                        'main/index',
                        'QuestionSearch' => ['category_id' => $data->category->id]
                    ])
                    );
                }
            ],
            [
                'attribute' => 'title',
                'label' => Yii::t('base', 'label-title'),
                'format' => 'text',
                'content' => function($data) {
                    return Html::a($data->title, Url::toRoute([
                        'main/view',
                        'id' => $data->id
                    ])
                    );
                }
            ],
            'question:html',
            'answer:html'
        ],
    ]); ?>
</div>
