<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // https://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),

            'username' => $this->string()->notNull()->unique(),
            'name' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password' => $this->string(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),

            'is_active' => $this->smallInteger()->defaultValue(1),
            'deleted' => $this->smallInteger(),
            'position' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->insert('{{%user}}', [
            'username' => 'admin',
            'name' => 'Администратор',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password' => '123456',
            'password_hash' => '$2y$13$1fnAOhEBVzCcOfl3n2QXaO4ai1dQyK2eOUL4CcOc9c5sdkEYe9X.O',
            'email' => 'dimanhim@list.ru',
            'status' => '10',
            'created_at' => time(),
            'updated_at' => time()
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
