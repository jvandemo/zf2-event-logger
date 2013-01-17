<?php
/**
 * Zend Framework 2 module for logging events to error log
 *
 * Usage: add Zf2EventLogger to your modules in your application.config.php
 *
 * @link      http://github.com/jvandemo/zf2-event-logger
 * @link      http://www.jvandemo.com
 * @author    Jurgen Van de Moere
 * @copyright Copyright, Jurgen Van de Moere
 * @version   1.0
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Zf2EventLogger;

use Zend\EventManager\StaticEventManager;

class Module
{

    public function onBootstrap($e)
    {
        $em = StaticEventManager::getInstance();
        $em->attach('*',
                '*',
                function ($e)
                {
                    $event = $e->getName();
                    $target = get_class($e->getTarget());
                    $params = $e->getParams();
                    $output = sprintf(
                            'Event "%s" was triggered on target "%s", with parameters %s',
                            $event,
                            $target,
                            json_encode($params));
                    
                    error_log($output);
                    
                    // Return true so this listener doesn't break the validator
                    // chain triggering session.validate listeners
                    return true;
                });
    }
}
