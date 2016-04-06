<?php

use yii\db\Migration;

class m160406_104350_update_table_notification_with_relations extends Migration
{
    public function up()
    {
        $notification='notification';
        $user='user';
        $this->addForeignKey('fk_notification_user',$notification,'created_by',$user,'id');
    }

    public function down()
    {
        echo "m160406_104350_update_table_notification_with_relations cannot be reverted.\n";

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
