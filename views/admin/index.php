<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<h1><?= Yii::t('base', 'link-admin') ?></h1>

<p>
    <?= Html::a(Yii::t('base', 'link-edit-questions'), Url::toRoute('questions/index')) ?>
    <br/>
    <?= Html::a(Yii::t('base', 'link-edit-categories'), Url::toRoute('categories/index')) ?>
</p>
