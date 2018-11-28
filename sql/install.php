<?php
$sql = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'faq` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`question` varchar(250) NOT NULL,
            `reponse` varchar(250) NOT NULL,
			PRIMARY KEY (`id`))';
