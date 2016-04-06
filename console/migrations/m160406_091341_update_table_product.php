<?php

use yii\db\Migration;

class m160406_091341_update_table_product extends Migration
{
    public function up()
    {
    	$this->renameTable('table_product', 'product');
    }

    public function down()
    {
        echo "m160406_091341_update_table_product cannot be reverted.\n";

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
