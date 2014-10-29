<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/28/14
 * Time: 5:42 PM
 */

namespace App\Http;


class BlueDuck extends Duck {

    public function performFly(FlyBehaviorContract $flyBehavior)
    {
       return  $flyBehavior->fly();
    }

    public function performQuack(QuackBehaviorContract $quackBehavior)
    {
        return $quackBehavior->quack();
    }


}