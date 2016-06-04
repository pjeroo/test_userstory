<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\QuestionCategories */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['/admin/index']];
$this->params['breadcrumbs'][] = ['label' => 'Question Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-categories-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('base', 'label-update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('base', 'label-delete'), ['delete', 'id' => $model->id], [
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
            'title',
            [
                'label' => 'Язык',
                'value' => isset(Yii::$app->params['availableLanguages'][$model->lang])
                    ? Yii::$app->params['availableLanguages'][$model->lang]
                    : 'Unknown'
            ],
        ],
    ]) ?>

</div>
