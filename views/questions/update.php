<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Questions */

$this->title = Yii::t('base', 'label-update-question-a') . ': ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['/admin/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('base', 'label-questions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="questions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'categoryIds' => $categoryIds
    ]) ?>

</div>
