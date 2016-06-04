<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\QuestionCategories */

$this->title = 'Create Question Categories';
$this->params['breadcrumbs'][] = ['label' => 'Question Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-categories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
