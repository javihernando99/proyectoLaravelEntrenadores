<!DOCTYPE >
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>@yield('title')</title>
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</head>
<body>
    @include ('shared.navbar')
    @yield ('content')
</body>
</html>
