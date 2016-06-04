<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $title
 * @property string $question
 * @property string $answer
 * @property string $lang
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'question', 'title', 'lang'], 'required'],
            [['category_id'], 'integer'],
            [['question', 'answer'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => Yii::t('base', 'label-category'),
            'title' => Yii::t('base', 'label-title'),
            'question' => Yii::t('base', 'label-question'),
            'answer' => Yii::t('base', 'label-answer'),
            'lang' => Yii::t('base', 'label-lang'),
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(QuestionCategories::className(), ['id' => 'category_id']);
    }
}
