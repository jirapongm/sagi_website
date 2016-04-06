<?php

use yii\db\Migration;

class m160406_084755_update_table_sms extends Migration
{
    public function up()
    {
		$this->renameTable('table_sms','sms');  
    }

    public function down()
    {
        echo "m160406_084755_update_table_sms cannot be reverted.\n";

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
