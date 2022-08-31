<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />


    <!-- Scripts -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready( function() {
            let now = new Date();

            let day = ("0" + now.getDate()).slice(-2);
            let month = ("0" + (now.getMonth() + 1)).slice(-2);

            let today = now.getFullYear()+"-"+ (month)+"-"+(day);


           $('#nowDate').val(today);
            $('#cin').val(today);
            $('#cout').val(today);

            $('#datebtn').click(function(){

                testClicked();
                myPer();
                myDate();

            });
        });
        function testClicked()
        {
          $('.getDate').html($('#nowDate').val());
          $('.cinDate').html($('#cin').val());
          $('.coutDate').html($('#cout').val());
        }
        function myPer() {
            var date1 = new Date(document.getElementById("nowDate").value);
            var date2 = new Date(document.getElementById("cin").value);
            var diffDays = parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10);
            document.getElementById("result").value = diffDays;
        }
        function myDate() {
            var date1 = new Date(document.getElementById("cin").value);
            var date2 = new Date(document.getElementById("cout").value);
            var diffDay = parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10);
            document.getElementById("redate").value = diffDay;
        }
    </script>
</head>
<body>
    <div id="app">
        <!-- Section 1 Navbar -->
        @include('layouts.nav')

            @yield('content')

        <!-- Section 7 Footer -->
        @include('layouts.footer')
    </div>
<!-- AlpineJS Library -->
<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

</body>
</html>
