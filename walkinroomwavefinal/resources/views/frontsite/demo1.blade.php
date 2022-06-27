<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="scripts/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script>
    $(document).ready( function() {
        let now = new Date();

        let day = ("0" + now.getDate()).slice(-2);
        let month = ("0" + (now.getMonth() + 1)).slice(-2);

        let today = now.getFullYear()+"-"+ (month)+"-"+(day);


       $('#nowDate').val(today);
        $('#cin').val(today);

        $('#datebtn').click(function(){

            testClicked();
            myPer();

        });
    });
    function testClicked()
    {
      $('.getDate').html($('#nowDate').val());
      $('.cinDate').html($('#cin').val());
    }
    function myPer() {
        var date1 = new Date(document.getElementById("nowDate").value);
        var date2 = new Date(document.getElementById("cin").value);
        var diffDays = parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10);
        document.getElementById("result").value = diffDays;
    }
    </script>
</head>
<body>
    {{-- <input type="date" name="cin" id="cin"> --}}
    <form action="{{ route('demosearch') }}" method="post">
        @csrf
    <input type="date" name="cin" id="cin" placeholder="Check-in date" required="True">
    <input type="hidden" name="nowDate" id="nowDate">
    <input type="hidden" name="result" id="result" value="">
    {{-- <input type="button" id="datebtn"> --}}
    <button type="submit" id="datebtn" class="button">Search Tour <i class="fa fa-angle-right" aria-hidden="true"></i></button>
    {{-- <p class="getDate"></p>
    <p class="cinDate"></p> --}}
    </form>
</body>
</html>
