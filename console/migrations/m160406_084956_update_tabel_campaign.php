<?php

use yii\db\Migration;

class m160406_084956_update_tabel_campaign extends Migration
{
    public function up()
    {
		$this->renameTable('table_campaign', 'campaign');
    }

    public function down()
    {
        echo "m160406_084956_update_tabel_campaign cannot be reverted.\n";

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
