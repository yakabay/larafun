<?php

namespace App;




class MyClassForTryingCallbacks
{

    public static function testCallback($firstArgument, callable $callback)
    {
        call_user_func($callback, 'Tom');
        echo $firstArgument;
    }
}