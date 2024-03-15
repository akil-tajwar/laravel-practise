<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ $url }}" method="POST">
        @csrf
        <h1>{{ $title }}</h1>
        <input type="text" name="name" placeholder="Name" value="{{$customer->name}}"/><br>
        <input type="email" name="email" placeholder="Email" value="{{$customer->email}}"/><br>
        <input type="password" name="password" placeholder="Password" /><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password" /><br>
        <input type="text" name="country" placeholder="Country" value="{{$customer->country}}"/><br>
        <input type="text" name="state" placeholder="State" value="{{$customer->state}}"/><br>
        <input type="text" name="address" placeholder="Address" value="{{$customer->address}}"/><br>
        <div>
            <input type="radio" name="gender" id="" value="M" {{$customer->gender === 'M' ? 'checked' : ''}}>
            <label for="">Male</label>
        </div>
        <div>
            <input type="radio" name="gender" id="" value="F" {{$customer->gender === 'F' ? 'checked' : ''}}>
            <label for="">Female</label>
        </div>
        <div>
            <input type="radio" name="gender" id="" value="O" {{$customer->gender === 'O' ? 'checked' : ''}}>
            <label for="">Others</label>
        </div>
        <input type="date" name="birthDate" id="" value="{{$customer->birthDate}}"><br>
        <button>Submit</button>
    </form>
</body>

</html>
