<?php

use yii\db\Migration;

class m160427_053329_create_auth_item extends Migration
{
    public function up()
    {
        $this->execude('CREATE TABLE IF NOT EXISTS `auth_item` (
		  `name` varchar(64) NOT NULL,
		  `type` int(11) NOT NULL,
		  `description` text,
		  `rule_name` varchar(64) DEFAULT NULL,
		  `data` text,
		  `created_at` int(11) DEFAULT NULL,
		  `updated_at` int(11) DEFAULT NULL,
		  PRIMARY KEY (`name`),
		  KEY `rule_name` (`rule_name`),
		  KEY `type` (`type`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
    }

    public function down()
    {
        $this->dropTable('auth_item');
    }
}
