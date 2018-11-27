<?php
class myfaqdisplayModuleFrontController extends ModuleFrontController
{
  public function initContent()
  {
    parent::initContent();
    $this->setTemplate('module:myfaq/views/templates/front/display.tpl');
  }
}
