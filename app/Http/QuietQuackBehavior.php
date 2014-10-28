<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 10/28/14
 * Time: 5:50 PM
 */

namespace App\Http;


class QuietQuackBehavior implements QuackBehaviorContract{

    public function quack()
    {
        return 'I am quacking quietly';
    }

}