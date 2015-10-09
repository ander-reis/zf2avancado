<?php

namespace SON\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {

        $cache = $this->getServiceLocator()->get('Cache');


        if (!$result = $cache->getItem('dataAgora')) {
            $result = new \DateTime("now");
            $cache->addItem("dataAgora", $result);
        }


        echo $result->format('Y/m/d H:i:s');
        die;

        return new ViewModel();
    }

}
