<?php
/**
 * Created by PhpStorm.
 * User: Alyson
 * Date: 13/05/2019
 * Time: 21:40
 */

namespace Admin\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DashboardController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }
}