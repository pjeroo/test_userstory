<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;


/* @var $this yii\web\View */
/* @var $model app\models\Questions */

$this->title = Yii::t('base', 'label-create-question');
$this->params['breadcrumbs'][] = ['label' => Yii::t('base', 'label-questions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList($categoryIds) ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'question')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('base', 'label-create'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
