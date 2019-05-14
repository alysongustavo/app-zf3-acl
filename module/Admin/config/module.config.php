<?php
/**
 * Created by PhpStorm.
 * User: Alyson
 * Date: 13/05/2019
 * Time: 21:32
 */

namespace Admin;

use Zend\Router\Http\Literal;
use Zend\ServiceManager\Factory\InvokableFactory;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;

return [
    'router' => [
        'routes' => [
            'admin' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/admin',
                    'defaults' => [
                        'controller' => 'dashboard',
                        'action'     => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'login' => [
                        'type' => Literal::class,
                        'options' => [
                            'route' => '/login',
                            'defaults' => [
                                'controller' => 'auth',
                                'action' => 'login'
                            ]
                        ]
                    ]
                ]
            ]
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\DashboardController::class => InvokableFactory::class,
            Controller\AuthController::class => InvokableFactory::class
        ],
        'aliases' => [
            'dashboard' => Controller\DashboardController::class,
            'auth' => Controller\AuthController::class
        ]
    ],
    'doctrine' => [
        'driver' => [
            __NAMESPACE__ . '_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity']
            ],
            'orm_default' => [
                'drivers' => [
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ]
            ]
        ],
        'fixtures' => [
            'AdminFixture' => __DIR__ . '/../src/Entity/Fixture'
        ]
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/admin'           => __DIR__ . '/../view/layout/admin.phtml'
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];