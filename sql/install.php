<?php
$sql = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'faq` (
			`id` int(11) NOT NULL,
			`question` varchar(250) NOT NULL,
            `reponse` varchar(250) NOT NULL,
			PRIMARY KEY (`id`))';
		return Db::getInstance()->execute($sql);
