<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2018-03
 */
if (!function_exists('fsm')) {
    function fsm()
    {
        return app()->get('fsm');
    }
}