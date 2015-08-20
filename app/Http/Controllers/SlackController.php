<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Slack;

class SlackController extends Controller
{
   
    function roll()
    {
        if(Input::get('token')!='3W87az6H4XaZlCytJN5DfTPX')
            exit;
	    if(Input::has('text')){
		    $dice_text = Input::get('text');//轉大小寫
			$user = Input::get('user_name');
			//$res = str_split($dice_text);//全部分割
			Slack::send($user."丟出".$dice_text."的結果是:");
			$dice = $this->dice_filter($dice_text);
			$p = eval('return '.$dice.';');
			if($p==0)
				Slack::send('格式錯誤');
			else	
				Slack::send($dice.'合計：'.(int)$p);
		}
		else
			Slack::send("未輸入指令");
    }

    function roll_test()
    {
        $string = "2D6+2D6-4*5/3";
   	    echo $string."<BR>";
	   	$dice = $this->dice_filter($string);
	   	echo "final:".$dice."=";
	   	$p = eval('return '.$dice.';');
		echo (int)$p;
    }
    protected function dice_filter($dice)
    {
        $num = 0;
   	    while (preg_match("/\d+[Dd]\d+/",$dice,$result)) {
   		    $dice_result = $this->dice_rolling($result[0]);
   			$dice = preg_replace ("/\d+[Dd]\d+/",$dice_result,$dice,1);
   	    }
   		return $dice;
    }
    protected function dice_rolling($dice){
   	    $dice = explode("D",strtoupper($dice));
   		$dice_res=0;
   		$dice_show=null;
   		for($i=1;$i<=$dice[0];$i++){
   			$dice_tmp = rand(1,$dice[1]);
   			$dice_show = $dice_show."「".$dice_tmp."」";
   			$dice_res = $dice_res+$dice_tmp;
   		}
   		Slack::send($dice_show);
   		return $dice_res;
    }

    public function vote()
    {
        if (Input::get('token') != 'BpJwfRmGLk24PgwlepLdf5mx')
            exit;
        if (Input::has('text')){

        }
        else
            Slack::send("未輸入指令");
    }
}
