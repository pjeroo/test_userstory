<?php

use yii\db\Migration;

/**
 * Handles the creation for table `schema`.
 */
class m160604_034821_create_schema extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('question_categories', [
            'id' => $this->primaryKey(),
            'title' => $this->string(200)->notNull(),
            'lang' => $this->char(2)->notNull()
        ]);

        $this->createTable('questions', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'title' => $this->string(200)->notNull(),
            'question' => $this->text()->notNull(),
            'answer' => $this->text(),
            'lang' => $this->char(2)->notNull()
        ]);

        $this->addForeignKey(
            'fk-question-category',
            'questions',
            'category_id',
            'question_categories',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('questions');
        $this->dropTable('question_categories');
    }
}
