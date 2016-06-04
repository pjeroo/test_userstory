<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;

/* @var $this yii\web\View */
/* @var $model app\models\Questions */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('base', 'label-questions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'label' => 'Категория',
                'value' => $model->category->title
            ],
            'title',
            'question:html',
            'answer:html',
        ],
    ]) ?>

    <?php if (empty($model->answer)) : ?>
    <div class="questions-form">

        <?php $form = ActiveForm::begin([
            'action' => Url::toRoute(['main/update', 'id' => $model->id])
        ]); ?>

        <?= $form->field($model, 'answer')->widget(Widget::className(), [
            'settings' => [
                'lang' => 'ru',
                'minHeight' => 200
            ]
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('base', 'label-create-answer'), ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    <?php endif; ?>

</div>
