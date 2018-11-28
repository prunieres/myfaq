<?php
class myfaqdisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    if (Tools::isSubmit('submit')){
        $ndb = new dbModel;
        $ndb ->question= Tools::getValue('question');
        $ndb->add();
    }
    parent::initContent();
    $this->setTemplate('module:myfaq/views/templates/front/display.tpl');
  }
}
