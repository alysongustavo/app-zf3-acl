<?php
/**
 * Created by PhpStorm.
 * User: Alyson
 * Date: 13/05/2019
 * Time: 22:15
 */

namespace Admin\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AuthController extends AbstractActionController
{

    public function loginAction(){
        return new ViewModel();
    }
}