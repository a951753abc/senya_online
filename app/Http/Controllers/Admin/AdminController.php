<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected $project_name;
	public function __construct()
	{
        $this->Update_project_name("千夜月姬後台管理");
		//$this->middleware('auth');
	}

	function index()
	{
        $tplVar['Project_name'] = $this->project_name;
        $tplVar['title'] = "後台管理";
		return view('admin.admin',$tplVar);
	}

    protected function Update_project_name($name)
    {
        $this->project_name = $name;
    }
}