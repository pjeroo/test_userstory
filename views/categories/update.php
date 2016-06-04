<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\QuestionCategories */

$this->title = 'Update Question Categories: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Question Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="question-categories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
