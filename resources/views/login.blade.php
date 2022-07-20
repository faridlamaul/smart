<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    <title>Login | SMART</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<body style="overflow: hidden">
    <div class="container" style="margin-top: 140px;">
        <div class="col-md-offset-3" style="text-align: -webkit-center;">
            <form class="form-horizontal" style="content-visibility: auto;" method="POST"
                action="{{ route('login') }}">
                @csrf
                <span class="heading">LOGIN</span>

                @if ($errors->any())
                    <div class="form-group">
                        <div class="alert alert-danger">
                            Email or Password is incorrect
                        </div>
                    </div>
                @endif
                <div class="form-group">
                    <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group help">
                    <input name="password" type="password" class="form-control" id="inputPassword3"
                        placeholder="Password">
                    <i class="fa fa-lock"></i>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">log in</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
