<?php

/** Interface methods must be public
 * interface methods are all abstract
 */

interface Vehicle
{
    public function horn();
}

class Duke implements Vehicle
{
    public function horn()
    {
        echo "Titittt titittt";
    }
}

$duke250 = new Duke();
$duke250->horn();