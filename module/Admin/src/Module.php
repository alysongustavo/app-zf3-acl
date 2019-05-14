<?php
/**
 * Created by PhpStorm.
 * User: Alyson
 * Date: 13/05/2019
 * Time: 21:33
 */

namespace Admin;


use Zend\ModuleManager\ModuleManager;
use Zend\Mvc\MvcEvent;

class Module
{

    public function getConfig(){
        return include __DIR__ . '/../config/module.config.php';
    }

    public function init(ModuleManager $manager){

        $eventManager = $manager->getEventManager();
        $eventShared = $eventManager->getSharedManager();

        $eventShared->attach(__NAMESPACE__, 'dispatch', [$this, 'onDispatch'], 100);
    }

    public function onDispatch(MvcEvent $event){

        // Get controller to which the HTTP request was dispatched.
        $controller = $event->getTarget();
        // Get fully qualified class name of the controller.
        $controllerClass = get_class($controller);
        // Get module name of the controller.
        $moduleNamespace = substr($controllerClass, 0, strpos($controllerClass, '\\'));

        // Switch layout only for controllers belonging to our module.
        if ($moduleNamespace == __NAMESPACE__) {
            $viewModel = $event->getViewModel();
            $viewModel->setTemplate('layout/admin');
        }
    }
}