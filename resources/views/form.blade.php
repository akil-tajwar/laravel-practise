<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Registration Page</h1>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <button>Submit</button>
    </form>
</body>

</html>