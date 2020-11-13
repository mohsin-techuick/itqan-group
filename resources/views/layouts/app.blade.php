<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <!--Custom css-->
    <link rel="stylesheet" href="{{asset("css/custom.css")}}">
    <!--Custom fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@800&display=swap" rel="stylesheet">

</head>
<body>

    @yield('content')
    <!--Bootstrap javascript -->
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>

