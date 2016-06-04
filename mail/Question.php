<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Question
 *
 * @property integer $id
 * @property Category $category
 * @property string $question
 * @property string $answer
 *
 * @package app\models
 */
class Question extends ActiveRecord
{
    public static function tableName()
    {
        return 'questions';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}