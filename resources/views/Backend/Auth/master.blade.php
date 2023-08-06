<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('auth_title') | Authorization</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Auth/style.css')}}">
</head>
<body>

<div class="container-fluid g-0 main-body">
    <div class="auth-section">
        <div class="card">
            <div class="card-header">
                <h4 class="my-3 text-center">@yield('card-header')</h4>
            </div>
            <div class="card-body">
                @yield('card-body')
            </div>
        </div>
    </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>