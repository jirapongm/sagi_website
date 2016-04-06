<?php

use yii\db\Migration;

class m160406_083525_create_table_product extends Migration
{
    public function up()
    {
        $this->createTable('table_product', [
            'id' => $this->primaryKey(),
        	'name' => $this->string(100),
        	'description' => $this->text(),
        	'deleted' => $this->boolean(),
        	'created_at' => $this->dateTime(),
        	'updated_at' => $this->timestamp(),
        	'created_by' => $this->integer(),
        	'updated_by' => $this->integer(),
        ]);
    }

    public function down()
    {
        $this->dropTable('table_product');
    }
}
