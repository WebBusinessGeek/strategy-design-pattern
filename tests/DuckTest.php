<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/28/14
 * Time: 8:01 PM
 */

use App\Http\Duck;

class DuckTest extends PHPUnit_Framework_TestCase {

    public function testSwim()
    {

        $duck = $this->getMockForAbstractClass('App\Http\Duck');

        $this->assertEquals('I am swimming', $duck->swim());

    }

}
