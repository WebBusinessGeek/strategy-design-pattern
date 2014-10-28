<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/28/14
 * Time: 5:48 PM
 */

namespace App\Http;


class SlowFlyBehavior implements FlyBehaviorContract{

    public function fly()
    {
        return 'I am flying slow';
    }

}