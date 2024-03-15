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
        <input type="text" name="name" placeholder="Name" value="{{isset($customer) ? $customer->name : ''}}"/><br>
        <input type="email" name="email" placeholder="Email" value="{{isset($customer) ? $customer->email : ''}}"/><br>
        <input type="password" name="password" placeholder="Password" /><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password" /><br>
        <input type="text" name="country" placeholder="Country" value="{{isset($customer) ? $customer->country : ''}}"/><br>
        <input type="text" name="state" placeholder="State" value="{{isset($customer) ? $customer->state : ''}}"/><br>
        <input type="text" name="address" placeholder="Address" value="{{isset($customer) ? $customer->address : ''}}"/><br>
        <div>
            <input type="radio" name="gender" id="" value="M" {{ isset($customer) && $customer->gender === 'M' ? 'checked' : '' }}>
            <label for="">Male</label>
        </div>
        <div>
            <input type="radio" name="gender" id="" value="F" {{ isset($customer) && $customer->gender === 'F' ? 'checked' : ''}}>
            <label for="">Female</label>
        </div>
        <div>
            <input type="radio" name="gender" id="" value="O" {{ isset($customer) && $customer->gender === 'O' ? 'checked' : ''}}>
            <label for="">Others</label>
        </div>
        <input type="date" name="birthDate" id="" value="{{isset($customer) ? $customer->birthDate : ''}}"><br>
        <button>Submit</button>
    </form>
</body>

</html>
