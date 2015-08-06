<?php
namespace App\Http\Controllers\Senya;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\senya_class;

class SenyaController extends Controller
{
	function index()
	{
		$class = senya_class::all()->first();;
		print_r($class);
		// return view('senya.class',$data);
	}
}