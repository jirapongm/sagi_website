<?php

use yii\db\Migration;

class m160406_083302_create_table_notification extends Migration
{
    public function up()
    {
        $this->createTable('table_notification', [
            'id' => $this->primaryKey(),
            'name'=> $this->string(100),
            'description'=>$this->text(),
            'deleted'=>$this->boolean()->defaultValue(0),
            'created_at'=>$this->dateTime(),
            'created_by'=>$this->integer(),
            'updated_at'=>$this->timestamp(),
            'updated_by'=>$this->integer()
        ]);
    }

    public function down()
    {
        $this->dropTable('table_notification');
    }
}
