<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;

/* @var $this yii\web\View */
/* @var $model app\models\Questions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList($categoryIds) ?>

    <?= $form->field($model, 'lang')->dropDownList(Yii::$app->params['availableLanguages']) ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'question')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200
        ]
    ]) ?>

    <?= $form->field($model, 'answer')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
