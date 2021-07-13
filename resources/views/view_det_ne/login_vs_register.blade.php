<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('libs/Style/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>


@if(session('Facebook'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> {{session('Facebook')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(session('login_fails'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>bad</strong> {{session('login_fails')}}!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif



<div class="col-12 d-flex justify-content-center" id="formlogin">
    <div class="login col-4">
        <h1 class="text-center">login</h1>
        <form action="{{route('datlogin')}}" method="post" name="dang_nhap">
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="password">
            </div>
            <div class="form-group text-center">
                <button class="btn btn-danger form-control">login</button>
                <a class="register" href="#">Register</a>
            </div>
        </form>
    </div>
</div>
<br><br>
<div class="col-12 d-none justify-content-center" id="formregister">
    <div id="register" class="col-4">
        <h1 class="text-center">Register</h1>
        <form action="{{route('datregister')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-6    form-group">
                    <input class="form-control" type="text" name="firstName" placeholder="firstName">
                </div>
                <div class="form-group col-6">
                    <input class="form-control" type="text" name="lastName" placeholder="lastName">
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <input class="form-control" type="password" name="password" placeholder="password">
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <input class="form-control" type="text" name="phoneNumber" placeholder="phoneNumber">
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <input class="form-control" type="date" name="birthday" placeholder="birthday">
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <input class="form-control" type="text" name="email" placeholder="email">
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <input class="form-control" type="text" name="address" placeholder="address">
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <input class="form-control" type="text" name="avatar" placeholder="avatar">
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <input class="form-control" type="text" name="coverPhoto" placeholder="cover photo">
                </div>
            </div>
            <div class="form-group text-center">
                <button class="form-control btn btn-info">Register</button>
                <a class="login1" href="#">quay ve</a>
            </div>
        </form>
    </div>
</div>
<script src="{{url('libs/Script/jquery.min.js')}}"></script>
<script src="{{url('libs/Script/bootstrap.min.js')}}"></script>
<script src="{{url('libs/Script/jscuadet/dat.js')}}"></script>
</body>
</html>
