<?php

use yii\db\Migration;

class m220113_150252_create_table_books extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%books}}',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string(128)->notNull(),
                'authors' => $this->string(128)->notNull(),
                'status' => $this->integer()->notNull()->defaultValue('8'),
                'read_count' => $this->integer(),
                'price' => $this->integer()->notNull(),
                'year' => $this->integer()->notNull(),
                'ISBN' => $this->string(14),
                'created_at' => $this->integer(),
                'updated_at' => $this->integer(),
                'created_by' => $this->integer(),
                'updated_by' => $this->integer(),
            ],
            $tableOptions
        );

        $this->createIndex('isbn_unique', '{{%books}}', ['ISBN'], true);
    }

    public function down()
    {
        $this->dropTable('{{%books}}');
    }
}
