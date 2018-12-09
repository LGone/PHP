<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <title>Laravel</title>

<div class="panel panel-default">
                <div class="panel-heading">文件上传</div><br />
                <div class="panel-body">
<form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <div class="col-md-6">
                <input id="file" type="file" class="form-control" name="source">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-sign-in"></i> 上传
                </button>
            </div>
        </div>
</form>
</div>
</div>
    </body>
</html>
