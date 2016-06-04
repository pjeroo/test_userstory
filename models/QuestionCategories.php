<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question_categories".
 *
 * @property integer $id
 * @property string $title
 */
class QuestionCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    public function getCategoriesAsArray()
    {
        $categories = $this->find()->all();

        if (empty($categories)) {
            return [];
        }

        return array_reduce(
            $categories,
            function($res, $item) {
                $res[$item->id] = $item->title;
                return $res;
            }
        );
    }
}
