<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="{{ URL::asset('/css/lhtrpg.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>skill</title>
</head>
<body>
    @foreach ($data as $key => $value)
    <? 
        //處理標籤
        if (isset($value['標籤'])) {
            $value['標籤'] = explode(",",$value['標籤']);
            $value['標籤'] = array_filter($value['標籤']);
        }
    ?>
    <div class="skin" style="padding: 0px;  width: 335px; height: 405px;">
        <div class="skillWrap">
            <h3 class="skillTitle">{{$value['特技名稱']}}</h3>
            <ul class="skillTags">
                <li class="skillType">{{$value['型態']}}</li>
                @if (isset($value['標籤']))
                    @foreach ($value['標籤'] as $tag)
                        <li class="skillTag">{{$tag}}</li>
                    @endforeach    
                @endif    
            </ul>
            <div class="skillTh" style="width:52px">最大SR</div>
            <div class="skillTd" style="min-width:15px;">{{$value['最大ＳＲ']}}</div>
            <div class="skillTh">時機</div>
            <div class="skillTd" style="width:183px;">{{$value['時機']}}</div>
            <br>
            <div class="skillTh clear">判定</div>
            <div class="skillTd" style="width:268px;">{{$value['判定']}}</div>
            <br>
            <div class="skillTh clear">對象</div>
            <div class="skillTd">{{$value['對象']}}</div>
            <div class="skillTh">射程</div>
            <div class="skillTd">{{$value['射程']}}</div>
            <br>
            <div class="skillTh clear">代價</div>
            <div class="skillTd">{{$value['代價']}}</div>
            <div class="skillTh">限制</div>
            <div class="skillTd">{{$value['限制']}}</div>
            <p class="skillFunction">
                <b>效果：</b>
                {{$value['效果']}}
            </p>
            <hr class="skillHr">
            <p class="skillFunction">
                <b>解說：</b>
                @if (isset($value['解說']))
                    {{$value['解說']}}
                @endif
            </p>
        </div>
    </div>
    @endforeach
</body>
</html>