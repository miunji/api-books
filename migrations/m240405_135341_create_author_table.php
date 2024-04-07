<?php

use yii\db\Migration;

/**
 * Handles the creation of table `author`.
 */
class m240405_135341_create_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('author', [
            'id'         => $this->primaryKey(),
            'name'       => $this->string(32)->notNull(),
            'birth_year' => $this->integer(4)->null(),
            'country'    => $this->string(32)->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('author');
    }
}
