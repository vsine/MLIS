<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="@yield('logo','/img/favicon.ico')" type="image/x-icon">
    <link rel="shortcut icon" href="@yield('logo','/img/favicon.ico')" type="image/x-icon">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
    <title>@yield('title',@env('WEB_TITLE'))</title>
</head>
<body>


@yield('body')

</body>
</html>
