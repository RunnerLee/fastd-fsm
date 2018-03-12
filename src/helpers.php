<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2018-03
 */

use Runner\Heshen\Contracts\StatefulInterface;
use Runner\Heshen\Machine;

if (!function_exists('fsm')) {

    /**
     * @param StatefulInterface $stateful
     * @return Machine
     */
    function fsm(StatefulInterface $stateful)
    {
        return app()->get('fsm')->make($stateful);
    }
}
