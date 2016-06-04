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
            [['category_id', 'question', 'title'], 'required'],
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
            'category_id' => 'Category ID',
            'title' => 'Title',
            'question' => 'Question',
            'answer' => 'Answer',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(QuestionCategories::className(), ['id' => 'category_id']);
    }
}
