<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Slack;

class SlackController extends Controller
{

    protected $channel;
   
    function roll()
    {
        if(Input::get('token')!='3W87az6H4XaZlCytJN5DfTPX')
            exit;
	    if(Input::has('text')){
		    $dice_text = Input::get('text');//轉大小寫
			$user = Input::get('user_name');
            $this->setChannel(Input::get('channel_name'));
            if ($this->channel == 'privategroup')
			    Slack::send($user."丟出".$dice_text."的結果是:");
            else
                Slack::to('#'.$this->channel)->send($user."丟出".$dice_text."的結果是:");
			$dice = $this->dice_filter($dice_text);
			$p = eval('return '.$dice.';');
			if($p==0)
				Slack::send('格式錯誤');
			else {	
                if ($this->channel == 'privategroup')
				    Slack::send($dice.'合計：'.(int)$p);
                else
                    Slack::to('#'.$this->channel)->send($dice.'合計：'.(int)$p);
            }
		}
		else
			Slack::send("未輸入指令");
        $text = Input::all();
        Slack::send($text);
    }

    protected $roll_user;
    protected $gm;

    function sroll()
    {
        if(Input::get('token')!='BpJwfRmGLk24PgwlepLdf5mx')
            exit;
        if(Input::has('text')){
            $text = explode(' ', Input::get('text'));
            $dice_text = $text[1];

            $user = Input::get('user_name');
            $this->setUser($user);
            $this->setGm($text[0]);
            Slack::to('@'.$this->roll_user)->send($user."丟出".$dice_text."的結果是:");
            Slack::to('@'.$this->gm)->send($user."丟出".$dice_text."的結果是:");
            $dice = $this->dice_filter($dice_text, 1);
            $p = eval('return '.$dice.';');
            if($p==0)
                Slack::send('格式錯誤');
            else {    
                Slack::to('@'.$this->roll_user)->send($dice.'合計：'.(int)$p);
                Slack::to('@'.$this->gm)->send($dice.'合計：'.(int)$p);
            }
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
    protected function dice_filter($dice, $type=null)
    {
        $num = 0;
   	    while (preg_match("/\d+[Dd]\d+/",$dice,$result)) {
   		    $dice_result = $this->dice_rolling($result[0], $type);
   			$dice = preg_replace ("/\d+[Dd]\d+/",$dice_result,$dice,1);
   	    }
   		return $dice;
    }
    protected function dice_rolling($dice, $type=null){
   	    $dice = explode("D",strtoupper($dice));
   		$dice_res=0;
   		$dice_show=null;
   		for($i=1;$i<=$dice[0];$i++){
   			$dice_tmp = rand(1,$dice[1]);
   			$dice_show = $dice_show."「".$dice_tmp."」";
   			$dice_res = $dice_res+$dice_tmp;
   		}
        if ($type) {
            Slack::to('@'.$this->roll_user)->send($dice_show);
            Slack::to('@'.$this->gm)->send($dice_show);
        }
        else {
            if ($this->channel == 'privategroup')            
   		        Slack::send($dice_show);
            else
                Slack::to('#'.$this->channel)->send($dice_show);
        }
   		return $dice_res;
    }

    public function setUser($user)
    {
        $this->roll_user = $user;
    }

    public function setGm($user)
    {
        $this->gm = $user;
    }

    public function setChannel($channel)
    {
        $this->channel = $channel;
    }


}
