<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="{{ URL::asset('/css/lhtrpg.css') }}" rel="stylesheet">
    <title>skill</title>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{ URL::asset('/js/sheetrock.js') }}"></script>
<div class="skin" style="padding: 0px;  width: 335px; height: 405px;">

    <div class="skillWrap">
        <h3 class="skillTitle" style="height: 25px">標題</h3>
        <ul class="skillTags">
            <li class="skillType">戰鬥</li>
            <li class="skillTag">型態</li>
        </ul>
        <div class="skillTh" style="width:52px">最大SR</div>
        <div class="skillTd" style="min-width:15px;">1</div>
        <div class="skillTh">時機</div>
        <div class="skillTd" style="width:183px;">常駐</div>
        <br>
        <div class="skillTh clear">判定</div>
        <div class="skillTd" style="width:268px;">無判定</div>
        <br>
        <div class="skillTh clear">對象</div>
        <div class="skillTd">廣範圍20(無差別)</div>
        <div class="skillTh">射程</div>
        <div class="skillTd">至近</div>
        <br>
        <div class="skillTh clear">代價</div>
        <div class="skillTd">－</div>
        <div class="skillTh">限制</div>
        <div class="skillTd">－</div>
        <p class="skillFunction">
            <b>效果</b>
            效果敘述。
        </p>
        <hr class="skillHr">
        <p class="skillFunction">
            <b>解說：</b>
            內文。
        </p>
    </div>
</div>
<table id="statistics" class="table table-condensed table-striped"></table>
</body>
</html>

<script type="text/javascript">
    var url = 'https://docs.google.com/spreadsheets/d/1bHgaYiM2dWuP-anjaUCSLITxnbwiApIMKzvBCQhzfpE/edit#gid=367257500';
    $('#statistics').sheetrock({
        url: url
    });

</script>