<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device.width, initial-scale=1">
<title>@yield('title')</title>
<link href="{{asset('css/app.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-md-12">
        Place du menu
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        @yield('content')
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>