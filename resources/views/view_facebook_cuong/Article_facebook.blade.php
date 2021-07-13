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
<div id="article">
    <form action="{{route('article_post')}}" method="post">
        @csrf
        <input type="text" name="user_id" placeholder="nhap id">
        <input type="text" name="content" placeholder="nhap content">
        <input type="text" name="images" placeholder="nhap anh">
        <button>Submit</button>
    </form>
</div>
</body>
</html>
