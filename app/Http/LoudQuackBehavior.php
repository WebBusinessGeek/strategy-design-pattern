<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/28/14
 * Time: 5:49 PM
 */

namespace App\Http;


class LoudQuackBehavior implements QuackBehaviorContract {

    public function quack()
    {
        return 'I am quacking loud';
    }

}