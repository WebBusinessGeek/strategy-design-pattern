<?php namespace App\Http\Controllers;

use App\Http\BlueDuck;
use App\Http\GreenDuck;
use Illuminate\Routing\Controller;

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
		var_dump($greenDuck->performFly(\SlowFlyBehavior));
	}

	/**
	 * @Get("/green")
	 */
	public function greenDuck()
	{
		$greenDuck = new GreenDuck();
		var_dump($greenDuck);
	}

}
