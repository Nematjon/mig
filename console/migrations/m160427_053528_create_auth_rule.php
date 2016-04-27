<?php

use yii\db\Migration;

class m160427_053528_create_auth_rule extends Migration
{
    public function up()
    {
        $this->execude('CREATE TABLE IF NOT EXISTS `auth_rule` (
		  `name` varchar(64) NOT NULL,
		  `data` text,
		  `created_at` int(11) DEFAULT NULL,
		  `updated_at` int(11) DEFAULT NULL,
		  PRIMARY KEY (`name`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
    }

    public function down()
    {
        $this->dropTable('auth_rule');
    }
}
