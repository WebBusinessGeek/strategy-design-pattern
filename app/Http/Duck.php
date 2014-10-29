<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/28/14
 * Time: 5:31 PM
 */

namespace App\Http;


class Duck {

    public function swim()
    {
        return 'I am swimming';
    }

    public function performFly(FlyBehaviorContract $flyBehavior)
    {
        return $flyBehavior->fly();
    }

    public function performQuack(QuackBehaviorContract $quackBehavior)
    {
        return $quackBehavior->quack();
    }


}