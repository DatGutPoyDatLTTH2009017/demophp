<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>helloworld</h1>
{{--<a href="{{route('aboutus')}}">--}}
{{--    <button>aboutus</button></a>--}}
{{--<a href="{{route('contact')}}">--}}
{{--    <button>contact</button></a>--}}
{{--<form action="{{route('hellopost')}}" method="Post">--}}
{{--    @csrf--}}
{{--    <input type="text"name="form_input">--}}
{{--    <button>submit</button>--}}
{{--</form>--}}
//Truyền route có tham số//
{{--<a href="{{route('update_product',2345)}}">click</a>--}}
{{--@for($i = 0; $i < 10; $i++)--}}
{{--    @if($i %2 == 0)--}}
{{--        <h1>{{$i}}</h1>--}}
{{--        @endif--}}
{{--@endfor--}}
{{--@include('view_cua_cuong.layout.muoi_hello')--}}
<form action="{{route('add_product')}}" method="post">
    @csrf
    <input type="text" name="product_name" placeholder="nhap ten">
    <input type="text" name="price" placeholder="nhap gia">
    <input type="text" name="thumbnail" placeholder="chon anh">
    <input type="text" name="Origin" placeholder="nhap xuat su">
    <button>send</button>
</form>
</body>
</html>
