<?php namespace App\Http\Controllers;

use App\Http\BlueDuck;
use App\Http\GreenDuck;
use Illuminate\Routing\Controller;
use App\Http\SlowFlyBehavior;
use App\Http\LoudQuackBehavior;
use App\Http\FastFlyBehavior;
use App\Http\QuietQuackBehavior;
use App\Http;





class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| Controller methods are called when a request enters the application
	| with their assigned URI. The URI a method responds to may be set
	| via simple annotations. Here is an example to get you started!
	|
	*/

	/**
	 * @Get("/")
	 */
	public function index()
	{

		$greenDuck = new GreenDuck();
		return $greenDuck->performFly(new SlowFlyBehavior()).' and '. $greenDuck->performQuack(new LoudQuackBehavior());


	}


}
