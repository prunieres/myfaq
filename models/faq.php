<?php
class dbModel extends ObjectModel{
    public $id;
    public $question;
    public $reponse;

    public static $definition = [
    'table' => 'faq',
    'primary' => 'id',
    'fields' => array(
        'id'  => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
        'question'         => ['type' => self::TYPE_STRING])
    ];

    public function getAll(){
        $sql = 'SELECT * FROM '._DB_PREFIX_.'faq';
        return Db::getInstance()->executeS($sql);
    }


}
