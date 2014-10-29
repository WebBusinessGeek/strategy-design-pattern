<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/28/14
 * Time: 8:20 PM
 */

namespace Tests;


use App\Http\FastFlyBehavior;
use App\Http\GreenDuck;
use App\Http\LoudQuackBehavior;
use App\Http\QuietQuackBehavior;
use App\Http\SlowFlyBehavior;

class GreenDuckTest extends \PHPUnit_Framework_TestCase {

    public function testPerformFly()
    {
        $greenDuck = new GreenDuck();

        $this->assertEquals('I am flying fast', $greenDuck->performFly(new FastFlyBehavior()));

        $this->assertEquals('I am flying slow', $greenDuck->performFly(new SlowFlyBehavior()));

    }

    public function testPerformQuack()
    {
        $greenDuck = new GreenDuck();

        $this->assertEquals('I am quacking loud', $greenDuck->performQuack(new LoudQuackBehavior()));

        $this->assertEquals('I am quacking quietly', $greenDuck->performQuack(new QuietQuackBehavior()));

    }

}
