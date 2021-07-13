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
<div>
    <h1>add articles</h1>
</div>
<div id="contact">
    <form action="" method="post">
        @csrf
        <input type="text" name="user_id" placeholder="user_id">
        <input type="text" name="content" placeholder="content">
        <input type="text" name="images" placeholder="images">
        <button>Register</button>
    </form>
</div>

</body>
</html>
