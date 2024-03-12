<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Registration 2</h1>
    <form action="{{url('/')}}/form2" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name"/><br>
        <input type="email" name="email" placeholder="Email"/><br>
        <input type="password" name="password" placeholder="Password"/><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password"/><br>
        <input type="text" name="country" placeholder="Country"/><br>
        <input type="text" name="state" placeholder="State"/><br>
        <input type="text" name="address" placeholder="Address"/><br>
        <div>
            <input type="radio" name="gender" id="" value="M">
            <label for="">Male</label>
        </div>
        <div>
            <input type="radio" name="gender" id="" value="F">
            <label for="">Female</label>
        </div>
        <div>
            <input type="radio" name="gender" id="" value="O">
            <label for="">Others</label>
        </div>
        <input type="date" name="birthDate" id=""><br>
        <button>Submit</button>
    </form>
</body>
</html>