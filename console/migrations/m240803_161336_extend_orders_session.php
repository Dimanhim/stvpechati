<?php

use yii\db\Migration;

/**
 * Class m240803_161336_extend_orders_session
 */
class m240803_161336_extend_orders_session extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(Yii::$app->db->tablePrefix.'orders', 'session_id', $this->integer(11));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240803_161336_extend_orders_session cannot be reverted.\n";

        return false;
    }
}
