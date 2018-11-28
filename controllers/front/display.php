<?php
class myfaqdisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
     $ndb = new dbModel;
    if (Tools::isSubmit('submit')){
        $ndb ->question= Tools::getValue('question');
        $ndb->add();
    }
    parent::initContent();
    $results = $ndb->getAll();
    $this->context->smarty->assign(
        array(
            'results' => $results
        ));
    $this->setTemplate('module:myfaq/views/templates/front/display.tpl');
  }
}
