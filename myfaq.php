<?php
if (!defined('_PS_VERSION_'))
{
  exit;
}

class MyFaq extends Module
{
  public function __construct()
  {
    $this->name = 'myfaq';
    $this->tab = 'front_office_features';
    $this->version = '1.0.0';
    $this->author = 'Bim';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    $this->bootstrap = true;

    parent::__construct();

    $this->displayName = $this->l('Mon Faq');
    $this->description = $this->l('Changer le champs MYFAQ_NAME.');

    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

    if (!Configuration::get('MYFAQ_NAME'))
      $this->warning = $this->l('No name provided');
  }


  public function install()
  {
    if (Shop::isFeatureActive())
      Shop::setContext(Shop::CONTEXT_ALL);

    return parent::install() &&
      $this->registerHook('leftColumn') &&
      $this->registerHook('footer') &&
      Configuration::updateValue('MYFAQ_NAME', 'question');
  }



  public function uninstall()
  {
  if (!parent::uninstall() ||
    !Configuration::deleteByName('MYFAQ_NAME')
  )
    return false;

  return true;
  }


}
