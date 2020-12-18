<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laravel CRUD Application</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="text-center" style="margin:0;"><a href="{{url("products")}}"><img
                src="{{asset("")}}" alt="Logo"></a><br>Laravel CRUD from Scratch
    </div>
    @yield('content')
</div>

</body>
</html>
