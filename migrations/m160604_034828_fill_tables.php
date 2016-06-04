<?php

use yii\db\Migration;

class m160604_034828_fill_tables extends Migration
{
    public function up()
    {
        $this->batchInsert(
            'question_categories',
            ['title', 'lang'],
            [
                ['Общие вопросы', 'ru'],
                ['Информационные технологии', 'ru'],
                ['Математика', 'ru'],
                ['Физика', 'ru'],
                ['Common', 'en'],
                ['IT', 'en'],
                ['Math', 'en'],
                ['Physics', 'en'],
            ]
        );

        $this->batchInsert(
            'questions',
            ['category_id', 'title', 'question', 'lang'],
            [
                [1, 'Смысл', 'В чем смысл жизни?', 'ru'],
                [2, 'Операторы', 'Для чего нужен условный оператор if?', 'ru'],
                [3, 'Какая-то математика', 'Какая будет производная у e^x?', 'ru'],
                [4, 'Котэ', 'Жив ли кот шрёдингера?', 'ru'],
                [5, 'Meaning', 'What is meaning of life?', 'en'],
                [6, 'Operators', 'For what purpose we have condition operator if?', 'en'],
                [7, 'Some math stuff', 'What is derivative of e^x?', 'en'],
                [8, 'Catz', 'Is Schrodinger cat alive?', 'en']
            ]
        );
    }

    public function down()
    {
        echo "m160604_034828_fill_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
