<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Category
 *
 * @property integer $id
 * @property string $title
 *
 * @package app\models
 */
class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'question_categories';
    }
}