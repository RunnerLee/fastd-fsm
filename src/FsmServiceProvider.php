<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2018-03
 */

namespace Runner\FastdFsm;

use Runner\Heshen\Factory;
use FastD\Container\Container;
use FastD\Container\ServiceProviderInterface;

class FsmServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     * @return mixed
     */
    public function register(Container $container)
    {
        $container->add(
            'fsm',
            new Factory($container->get('config')->get('fsm.blueprints'))
        );
    }
}
