<?php
$sql = 'DROP TABLE IF  EXISTS `'._DB_PREFIX_.'faq`';
		return Db::getInstance()->execute($sql);
