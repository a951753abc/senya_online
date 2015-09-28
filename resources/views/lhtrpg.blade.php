<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>skill</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="skill/upload">
    {{-- 上傳檔案 --}}
    <div class="row col s12 file-field input-field">
        <div class="btn col s4">
            <span>上傳EXCEL</span>
            <input type="file" name="lhz" />
        </div>
    </div>
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <input type="submit" value="上傳檔案">
</form>
</body>
</html>