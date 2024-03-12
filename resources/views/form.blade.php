<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Registration Page1</h1>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <x-input type='text' name='name' label ='Name'/>
        <x-input type='email' name='email' label ='Email'/>
        <x-input type='password' name='password' label ='Password'/>
        <x-input type='password' name='password' label ='Confirm password'/>
        <button>Submit</button>
    </form>
</body>

</html>