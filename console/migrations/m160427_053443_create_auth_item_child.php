<?php

use yii\db\Migration;

class m160427_053443_create_auth_item_child extends Migration
{
    public function up()
    {
        $this->execude('CREATE TABLE IF NOT EXISTS `auth_item_child` (
		  `parent` varchar(64) NOT NULL,
		  `child` varchar(64) NOT NULL,
		  PRIMARY KEY (`parent`,`child`),
		  KEY `child` (`child`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
    }

    public function down()
    {
        $this->dropTable('auth_item_child');
    }
}
