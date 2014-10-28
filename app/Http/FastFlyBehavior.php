<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/28/14
 * Time: 5:47 PM
 */

namespace App\Http;


class FastFlyBehavior implements FlyBehaviorContract{

    public function fly()
    {
        return 'I am flying fast';
    }
}