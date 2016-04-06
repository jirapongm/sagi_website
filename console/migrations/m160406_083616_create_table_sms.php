<?php

use yii\db\Migration;

class m160406_083616_create_table_sms extends Migration
{
    public function up()
    {
        $this->createTable('table_sms', [
            'id' => $this->primaryKey(),
        	'name' =>$this->string(100),
        	'description' =>$this->text(),
        	'deleted' =>$this->boolean()->defaultValue(0),
        	'created_at' =>$this->dateTime(),
        	'created_by' =>$this->integer(),
        	'updated_at' =>$this->timestamp(),
        	
        ]);
    }

    public function down()
    {
        $this->dropTable('table_sms');
    }
}
