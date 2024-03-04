<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Loop</h1>
    <div>
        @for($i=1; $i<=10; $i++)
            <h2>{{$i}}</h2>
        @endfor
    </div><br>

    <div>
        @php
            $arr = [1,2,3,4,5]
        @endphp
        @foreach($arr as $i)
            <h2>{{$i}}</h2>
        @endforeach
    </div><br>

    <div>
        @php
            $countries = ['Bangladesh', 'Afganisthan', 'Canada', 'Siria']
        @endphp
        <select name="" id="">
        @foreach($countries as $country)
            <option value="">{{$country}}</option>
        @endforeach
        </select>
    </div><br>

    <div>
        @php
            $fruits = ['mango', 'banana', 'apple', 'grapes']
        @endphp
        <select name="" id="">
        @foreach($fruits as $key=> $fruit)
            <option value="{{$key}}">{{$fruit}}</option>
        @endforeach
        </select>
    </div>
</body>
</html>