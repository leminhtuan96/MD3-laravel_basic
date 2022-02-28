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
<table border="1">
    <a href="{{route("customer_create")}}">Create</a>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>User_id</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($customers as $key=>$customer)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->user_id}}</td>
            <td><a href="{{route("customer_detail",$customer->id)}}">Detail</a></td>
            <td><a href="{{route("customer_update",$customer->id)}}">Update</a></td>
            <td><a onclick="return confirm('Are you sure??')" href="{{route("customer_delete",$customer->id)}}">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
