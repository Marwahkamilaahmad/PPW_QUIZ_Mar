<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    @include('topnav')
    </div>
    <div class="container">
    @yield('content')
     </div>
     <div>
    @yield('script')
    </div>
</body>
</html>
