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
        'question'         => ['type' => self::TYPE_STRING],
        'reponse'           => ['type' => self::TYPE_STRING])
    ];
}
