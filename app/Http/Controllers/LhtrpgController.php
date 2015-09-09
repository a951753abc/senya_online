<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class LhtrpgController extends Controller
{
    public function index()
    {
        return view('lhtrpg');
    }
}