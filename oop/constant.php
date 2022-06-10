<?php

/** Constant in oop is declared using const keyword
 * constant is case-sensitive and it is recommended 
 * to keep it all uppercase.
 * Constant can be accessed from outside the class as follows:
 * ClassName::CONSTANT_NAME;
 * accessed inside the class as follows:
 * self::CONSTANT_NAME;
 */

class Welcome
{
    const HELLO = "Hello, welcome!";
}

echo Welcome::HELLO;

class GoodBye
{
    const BYE = "Bye";
    public function farewell()
    {
        return self::BYE;
    }
}

$obj = new GoodBye();
echo $obj->farewell();