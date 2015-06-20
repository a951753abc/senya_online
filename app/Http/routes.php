<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('roll','SlackController@roll');
Route::get('test','SlackController@roll_test');
Route::get('hello',function (){
	
	$int = 10;
	$string = "Yes!";
	$array=array();
	$array[0][0]=$int;
	$array[0][1]=$string;
	$array[0][2]="鷹司東";
	$array[1][0]=100;
	$array[1][1]="Yes!Yes!";
	$array[1][2]="水月巴";

	foreach ($array as $key => $value) {
		echo "<BR>";
		echo "key:".$key;
		echo "<BR>";
		echo "value:";
		print_r($value);
		# code...
	}

	
});



