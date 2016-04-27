<?php

use yii\db\Migration;

class m160427_051827_create_auth_assignment extends Migration
{
    public function up()
    {
        $this->execude("CREATE TABLE IF NOT EXISTS `auth_assignment` (
		  `item_name` varchar(64) NOT NULL,
		  `user_id` varchar(64) NOT NULL,
		  `created_at` int(11) DEFAULT NULL,
		  PRIMARY KEY (`item_name`,`user_id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
    }

    public function down()
    {
        $this->dropTable('auth_assignment');
    }
}
