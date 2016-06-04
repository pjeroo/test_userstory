<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question_categories".
 *
 * @property integer $id
 * @property string $title
 * @property string $lang
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
            [['title', 'lang'], 'required'],
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
            'title' => Yii::t('base', 'label-title'),
            'lang' => Yii::t('base', 'label-lang')
        ];
    }

    public function getCategoriesAsArray($lang = null)
    {
        $categories = ($lang == null) ? $this->find()->all() : $this->findAll(['lang' => $lang]);

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
