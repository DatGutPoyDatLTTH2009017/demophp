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


<style>
    .avatar {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
        border: #f65757 3px solid;
    }

    .coverphoto {
        width: 100%;
        height: 350px;
        object-fit: cover;
        border: #f65757 3px solid;
    }

    .anhdaidien {
        transform: translateY(-100px);
    }

    .detbong {
        transform: translateY(-100px);
    }

    ul {
        list-style: none;
    }
    textarea {
        height: 200px;
    }
    .content {
        border: black 3px solid;
        padding: 5px 0 0 5px;
    }
    .anh {
        object-fit: cover;
        height: 50px;
        width: 50px;
        border: red 2px solid;
        border-radius: 50%;
    }
    .hitder{
        padding: 0;
        margin: 0;
    }
    .content>div{
        padding: 5px 10px 0 5px;
    }
    .anhne{
        width: 100%;
    }
    .loi {
        padding: 0;
    }
</style>

<div class="container">
    <div class="col-12">
        <h1 class="text-center text-danger">Facebook</h1>
    </div>
    <div class="col-12">
        <div class="col-12 text-center">
            <img class="coverphoto" src="{{$user->avatar}}">
        </div>
        <div class="col-12 text-center anhdaidien">
            <img class="avatar" src="{{$user->coverPhoto}}">
        </div>
        <div class="col-12 d-flex justify-content-center detbong">
            <h2><span class="show_name">{{$user->firstName}} {{$user->lastName}}</span></h2>
        </div>
        <div class="row">
            <div class="col-6">
                <p>Giới thiệu</p>
            </div>
            <div class="col-6">
                <p data-toggle="modal" data-target="#exampleModalCenter">Bạn đang nghĩ gì</p>
            </div>
        </div>
        <div class="form">
            <ul>
                <li>Đạt good boy</li>
                <li>{{$user->phoneNumber}}</li>
                <li>{{$user->email}}</li>
                <li>{{$user->address}}</li>
                <li>{{$user->birthday}}</li>
            </ul>
        </div>
    </div>
</div>
<div class="col-12 d-flex justify-content-center">
    <div class="col-5 content">
        @for($i = 0; $i < 20; $i++)
            <div class="col-12">
                <div class="col-12 hitder row">
                    <img class="anh" src="https://i.pinimg.com/564x/22/d8/b3/22d8b3b89e7253e4d72efadbfe9fa664.jpg">
                    <p>Lê thị đẹt <br><span>1h</span></p>
                </div>
                <div class="col-12 loi">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <img class="anhne" src="https://kenh14cdn.com/2020/8/30/1163375495891584553058176677240383299329602n-1598793872278674686958.jpg">
                </div>
            </div>
        @endfor
    </div>
</div>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('status')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <textarea name="content" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input name="images" class="form-control" type="text" placeholder="Thêm ảnh bạn muốn">
                    </div>
                    <div class="form-group">
                        <button class="form-control btn btn-danger">Enter</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary d-none">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script src="{{url('libs/Script/jquery.min.js')}}"></script>
<script src="{{url('libs/Script/bootstrap.min.js')}}"></script>
<script src="{{url('libs/Script/popper.min.js')}}"></script>
<script src="{{url('libs/Script/jscuadet/dat.js')}}"></script>
</body>
</html>
