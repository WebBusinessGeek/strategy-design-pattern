<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/28/14
 * Time: 5:31 PM
 */

namespace App\Http;


abstract class Duck {

    public function swim()
    {
        return 'I am swimming';
    }

    abstract public function performFly(SlowFlyBehavior $flyBehavior);

    abstract public function performQuack(LoudQuackBehavior $loudQuackBehavior);


}