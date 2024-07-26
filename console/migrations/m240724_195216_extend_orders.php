<?php

use yii\db\Migration;

/**
 * Class m240724_195216_extend_orders
 */
class m240724_195216_extend_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('stvp_orders', 'send_email', $this->smallInteger(1));
        $this->addColumn('stvp_orders', 'send_telegram', $this->smallInteger(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240724_195216_extend_orders cannot be reverted.\n";

        return false;
    }
}
