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
<form action="{{route("customer_store")}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="nhap name...">
    <input type="text" name="phone" placeholder="nhap phone...">
    <input type="text" name="email" placeholder="nhap email...">
    <input type="text" name="user_id" placeholder="nhap user-id...">
    <button>Create</button>
</form>
</body>
</html>
