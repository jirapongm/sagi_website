<?php

use yii\db\Migration;

class m160406_084758_update_table_email extends Migration
{
    public function up()
    {
    	
    	$this->renameTable('table_email', 'email');

    }

    public function down()
    {
        echo "m160406_084758_update_table_email cannot be reverted.\n";

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
