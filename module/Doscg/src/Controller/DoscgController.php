<?php

namespace Doscg\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DoscgController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function findxyzAction(){
        $stringTemp = "X,Y,5,9,15,23,Z";
        $posX = strpos($stringTemp,"X");
        $posY = strpos($stringTemp,"Y");
        $posZ = strpos($stringTemp,"Z");
        echo "x position = ".$posX;
        echo "y position = ".$posY;
        echo "z position = ".$posZ;
        return new ViewModel();
    }

    public function calabAction(){
        $a = 21;
        $b = 23-$a;
        $c = -21-$a;
        echo "b = ".$b;
        echo "c = ".$c;
        return new ViewModel();
    }

}
