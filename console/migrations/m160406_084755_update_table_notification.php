<?php

use yii\db\Migration;

class m160406_084755_update_table_notification extends Migration
{
    public function up()
    {
        $this->renameTable('table_notification','notification');
    }

    public function down()
    {
        echo "m160406_084755_update_table_notification cannot be reverted.\n";

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
