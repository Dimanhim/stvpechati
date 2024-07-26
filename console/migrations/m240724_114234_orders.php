<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m240724_114234_orders
 */
class m240724_114234_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id'                    => Schema::TYPE_PK,

            'name'                  => Schema::TYPE_STRING,
            'product'               => Schema::TYPE_STRING,
            'price'                 => Schema::TYPE_INTEGER,
            'phone'                 => Schema::TYPE_STRING,
            'email'                 => Schema::TYPE_STRING,
            'utm_source'            => Schema::TYPE_TEXT,
            'utm_campaign'          => Schema::TYPE_TEXT,
            'utm_medium'            => Schema::TYPE_TEXT,
            'utm_content'           => Schema::TYPE_TEXT,
            'utm_term'              => Schema::TYPE_TEXT,
            'comment'               => Schema::TYPE_TEXT,

            'is_active'             => Schema::TYPE_SMALLINT . ' DEFAULT 1',
            'deleted'               => Schema::TYPE_SMALLINT,
            'position'              => Schema::TYPE_INTEGER,
            'created_at'            => Schema::TYPE_INTEGER,
            'updated_at'            => Schema::TYPE_INTEGER,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%orders}}');
    }
}
