<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Excel;

class LhtrpgController extends Controller
{
    public function index()
    {
        /** push test @todo:HA*/

        return view('lhtrpg');
    }

    public function upload(Request $request)
    {
    	if ($request->hasFile('lhz')) {
		    $request->file('lhz')->move('upload', 'lhz.xlsx');
		    $path = 'upload/lhz.xlsx';
		    $objPHPExcel = Excel::load($path);
		    $objWorksheet = $objPHPExcel->getActiveSheet();
		    $highestRow = $objWorksheet->getHighestRow(); // 取得總行數
			$highestColumn = $objWorksheet->getHighestColumn(); // 取得總列數

			//讀取標題作標籤
			for($k='A';$k<=$highestColumn;$k++){
				$str = $objPHPExcel->getActiveSheet()->getCell("$k".'1')->getValue();
				$title[] = $str;
			}
			
		    //循環讀取excel文件,讀取一條,插入一條
			for($j=2;$j<=$highestRow;$j++){
				$count = 0;
				for($k='A';$k<=$highestColumn;$k++){
					$str = $objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue();
					if ($title[$count] == '標籤' && trim($str)) {
						$res[$j-2][$title[$count]] = $str.','.@$res[$j-2][$title[$count]];
					}
					elseif ($title[$count] != '標籤') {
						$res[$j-2][$title[$count]] = $str;	
					}
					
					$count++;
				}
			}
			$tplVar['data'] = $res;
			return view('lhtrpgView', $tplVar);
		}
    }
}