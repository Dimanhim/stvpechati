<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m240716_140639_products
 */
class m240716_140639_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id'                    => Schema::TYPE_PK,

            'short_name'            => Schema::TYPE_STRING,
            'name'                  => Schema::TYPE_STRING,
            'category_id'           => Schema::TYPE_INTEGER,
            'type_id'               => Schema::TYPE_INTEGER,
            'short_description'     => Schema::TYPE_TEXT,
            'description'           => Schema::TYPE_TEXT,
            'price'                 => Schema::TYPE_INTEGER,

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
        $this->dropTable('{{%products}}');
    }
}
