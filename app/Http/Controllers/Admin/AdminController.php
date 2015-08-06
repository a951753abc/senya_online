<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\senya_class;
use App\Senya_class_name;

class AdminController extends Controller
{
    protected $project_name;
    protected $title;
	public function __construct()
	{
        $this->Update_project_name("千夜月姬後台管理");
        $this->Update_title("後台管理");
		//$this->middleware('auth');
	}

	function index()
	{
        $tplVar['Project_name'] = $this->project_name;
        $tplVar['title'] = $this->title;
		return view('admin.admin',$tplVar);
	}

	protected function save()
	{
		$senya_class = new senya_class;
        $senya_class->class_version = 1;
        $senya_class->class_name = 2;
        $senya_class->class_define = "將心轉為利刃，為了斬倒敵人而磨練技量。這是與一般人無緣的修羅道。
你是很不容易走到這裡的吧？為了到這裡又越過幾個戰場呢？";
        $senya_class->class_str = 4;
        $senya_class->class_con = 4;
        $senya_class->class_int = 2;
        $senya_class->class_will = 2;
        $senya_class->class_skill_define = "初期取得：
得到「段位」、「流派」。
升級：
等級上升之時、選取一個喜歡的特技。每逢５等、１０等時，可以額外再取得一個特技。";
        $senya_class->save();
	}

    protected function Update_project_name($name)
    {
        $this->project_name = $name;
    }

    protected function Update_title($title)
    {
        $this->title = $title;
    }
}