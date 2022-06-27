<!DOCTYPE html>
<html>
<body>
    <h1>Room</h1>

    @foreach ( $rooms as $room )
       <h1>{{ $room->title }}</h1>
       <br>
    @endforeach

    <h1>Booking</h1>

    @foreach ( $bookings as $booking )
    <h1>{{ $booking->check_in }}</h1>
    <h1>{{ $booking->user->name }}</h1>
    <br>
    @endforeach

    <h1>Coupon</h1>

    @foreach ( $coupons as $coupon )

    <h1>{{ $coupon->code }}</h1>
    <h1>{{ $coupon->user->name }}</h1>
    <br>
    @endforeach


    <?php
    $code = $coupons->pluck('code');
    $codearr = $code->toArray();

    $php_array = $codearr;
    $js_array = json_encode($php_array);
    echo "var javascript_array = ". $js_array . ";\n";
    ?>

coupon: <input type="text" name="coupon" id="coupon" value=""><br>
Main C: <input type="text" name="code" id="code" value="{{ $code }}"><br>
Field3: <input type="text" id="field3"><br><br>

<button onclick="myFunction()">Copy Text</button>

<p>A function is triggered when the button is clicked. The function copies the text from Field1 into Field2.</p>

{{-- <script>
function myFunction(coupon,code) {

	var sum = parseInt(document.getElementById("a").value) + parseInt(document.getElementById("b").value);
    document.getElementById("field3").value = sum;
}

</script> --}}

<p id="demo"></p>

<script>
const numbers = <?php echo(json_encode($php_array)); ?>;
var coupon = parseInt(document.getElementById("coupon").value);
let txt = "";
numbers.forEach(myFunction);
document.getElementById("demo").innerHTML = txt;

function myFunction(value, index, array) {
    if(value==coupon){
        txt += value + "Yes<br>";
        document.getElementById("field3").value = value + "Yes<br>";
    }
    else{
        txt += value + "No<br>";
    }
}
</script>
// <input type="text" id="Num1" value="" />

//     <input type="text" id="Num2" value="" /> <br>


//     <button onclick="reSum()">Click</button>
//     <input type="text" id="Sum" value=""/>
//     <script>

//         function reSum()
//         {
//             var num1 = parseInt(document.getElementById("Num1").value);
//             var num2 = parseInt(document.getElementById("Num2").value);
//             document.getElementById("Sum").value = num1 + num2;

//         }

// </script>

</body>
</html>
