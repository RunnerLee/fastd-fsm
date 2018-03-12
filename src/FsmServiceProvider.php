<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2018-03
 */

namespace Runner\FastdFSM;

use FastD\Container\Container;
use FastD\Container\ServiceProviderInterface;
use Runner\Heshen\Factory;

class FsmServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     *
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
