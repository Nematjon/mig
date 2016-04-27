<?php

use yii\db\Migration;

class m160427_051608_create_user extends Migration
{
    public function up()
    {
        $this->execude("CREATE TABLE IF NOT EXISTS `user` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `username` varchar(255) NOT NULL,
		  `auth_key` varchar(32) NOT NULL,
		  `password_hash` varchar(255) NOT NULL,
		  `password_reset_token` varchar(255) NOT NULL,
		  `email` varchar(100) NOT NULL,
		  `status` smallint(10) NOT NULL,
		  `role` int(11) NOT NULL,
		  `created_at` int(11) NOT NULL,
		  `updated_at` int(11) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;");
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
