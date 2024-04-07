<?php

use yii\db\Migration;

/**
 * Handles the creation of table `book`.
 */
class m240407_122251_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('book', [
            'id'          => $this->primaryKey(),
            'title'       => $this->string(32)->notNull(),
            'author_id'   => $this->integer()->notNull(),
            'pages'       => $this->integer()->null(),
            'language'    => $this->string(32)->null(),
            'genre'       => $this->string(32)->null(),
            'description' => $this->string(512)->null(),
        ]);

        $this->addForeignKey(
            'fk-book-author_id',
            'book',
            'author_id',
            'author',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('book');
    }
}
