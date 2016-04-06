<?php

use yii\db\Migration;

class m160406_083620_create_table_email extends Migration
{
    public function up()
    {
        $this->createTable('table_email', [
            'id' => $this->primaryKey(),
        	'name' => $this->string(100),
        	'deccription' => $this->text(),
        	'delete'=>$this->boolean()->defaultValue(0),
        	'created_at'=>$this->dateTime(),
        	'created_by'=>$this->integer(),
        	'update_at'=>$this->timestamp(),
        	'update_by'=>$this->integer()
        ]);
    }

    public function down()
    {
        $this->dropTable('table_email');
    }
}
