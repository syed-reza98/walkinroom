<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <input type="hidden" name="nowDate" id="nowDate">
    <input type="hidden" name="result" id="result">
    {{-- @php
    var_dump($arr);
    @endphp --}}
    @foreach ($arr as $key => $value)
    Title: {{ $key }}
    Price: {{ $value }}
    <br>
    @endforeach

    {{-- @foreach ($arr as $room)

        <h1>{{ $room->title }}</h1>
        <h1>{{ $room }}</h1>
        <br>

    @endforeach --}}
    {{-- {{ $time_from }}
    {{ $time_to }} --}}


    {{-- <input type="hidden" name="cin" id="cin" value="{{ $time_from }}">
    <input type="hidden" name="nowDate" id="nowDate" value="{{ $time_to }}"> --}}
    {{-- <p id="field3"></p> --}}
    {{-- Field1: <input type="text" name="cin" id="cin" value="{{ $time_from }}"><br>
    Field2: <input type="text" name="nowDate" id="nowDate" value="{{ $time_to }}"><br>
    Field3: <input type="text" id="field3"><br><br> --}}
    {{-- Date: <input type="text" name="cin" id="cin" value="{{ $time_from }}"><br> --}}
    {{-- Date: <input type="text" name="cin1" id="cin1" value=""><br> --}}
    {{-- Date: <input type="text" name="nowDate" id="nowDate" value="{{ $time_to }}"><br> --}}

    {{-- <br> --}}
    {{-- <button onclick="myFunction()">Date Click</button><br> --}}

    {{-- Date: <input type="text" name="result" id="result" value=""><br> --}}

    {{-- <button onclick="myFunction()">Copy Text</button>

    <p>A function is triggered when the button is clicked. The function copies the text from Field1 into Field2.</p> --}}
    <script type="text/javascript" src="{{ asset('js/datetimepicker/moment.js') }}"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>
</html>
