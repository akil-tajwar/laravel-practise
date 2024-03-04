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
            <label for="">Name</label><br>
            <input type="text" name="name" value="{{old('name')}}">
            <div>
                @error('name')
                    {{$message}}
                @enderror
            </div>
        </div>
        <div>
            <label for="">Email</label><br>
            <input type="email" name="email" value="{{old('email')}}">
            <div>
                @error('email')
                    {{$message}}
                @enderror
            </div>
        </div>
        <div>
            <label for="">Password</label><br>
            <input type="password" name="password">
            <div>
                @error('password')
                    {{$message}}
                @enderror
            </div>
        </div>
        <div>
            <label for="">Confirm Password</label><br>
            <input type="password" name="password_confirmation">
            <div>
                @error('password_confirmation')
                    {{$message}}
                @enderror
            </div>
        </div>
        <button>Submit</button>
    </form>
</body>

</html>