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



<div id="login_page">
    <h1>login</h1>
    <form action="#" method="post" name="dang_nhap">
        <input type="text" name="email" placeholder="please enter email"><br><br>
        <input type="password" name="password" placeholder="please enter password"><br><br>
        <button>login</button>
    </form>
</div>

<br><br>
<div id="register">
    <h1>register</h1>
    <form action="{{route('register')}}" method="post" name="dang_ky">
        @csrf
        <input type="text" name="firstName" placeholder="firstName"><br>
        <input type="text" name="lastName" placeholder="lastName"><br>
        <input type="text" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="text" name="phoneNumber" placeholder="phoneNumber"><br>
        <input type="date" name="birthday" placeholder="birthday"><br>
        <input type="text" name="address" placeholder="address"><br>
        <input type="text" name="avatar" placeholder="avatar"><br>
        <input type="text" name="coverPhoto" placeholder="cover photo"><br>
        <button>register</button>
    </form>
</div>









</body>
</html>
