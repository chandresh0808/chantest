<?php

/**
 * Defines a User Module configurations
 * 
 * 
 * PHP version 5
 * 
 * @category   Module
 * @package    Auth
 * @subpackage config
 * @author     Costrategix Team <team@costrategix.com>
 * @copyright  2015 CoS
 * @license    http://www.costrategix.com Proprietary 
 * @version    GIT: 1.7
 * @link       http://www.costrategix.com 
 * 
 */

namespace Cron;

return array(
    'controllers' => array(
        'invokables' => array(
            'Cron\Controller\Cron' => 'Cron\Controller\CronController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'user' => __DIR__ . '/../view',
        ),
    ),
    // Doctrine config
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                )
            )
        ),
    ),
    'router' => array(
        'routes' => array(
            'delete_inactive_user_session' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => 'delete_inactive_user_session',
                    'defaults' => array(
                        'controller' => 'Cron\Controller\Cron',
                        'action' => 'delete-inactive-user-session',
                    ),
                ),
            ),
        ),
    ),
);
