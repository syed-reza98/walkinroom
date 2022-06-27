<!DOCTYPE html>
<html>
<body>

    Date: <input type="text" name="cin" id="cin" value="" onclick="myDate()"><br>
    {{-- Date: <input type="text" name="cin1" id="cin1" value=""><br> --}}
    Date: <input type="text" name="now" id="now" value=""><br>

    <br>
    <button onclick="cal()">Date Click</button><br>

    Date: <input type="text" name="result" id="result" value=""><br>
    <br>
    <script>
        // function cind(cin) {
        //     var sum = document.getElementById("cin").toLocaleString();
        // // let s= new Date().toLocaleString();
        // document.getElementById("cin1").value = sum;
        // }
       function myDate() {
        let s= new Date().toLocaleString();
        document.getElementById("now").value = s;
        }
        function cal(cin,now){
            var cin = new Date("2012-12-25");
            var cin = parseInt(document.getElementById("cin").value)
            var now = parseInt(document.getElementById("now").value)
            // var now = document.getElementById("now").value
            document.getElementById("result").value = cin - now;
        }
        // function cal(now){
        //     var date1 = new Date("now");
        //     document.getElementById("result").value = date1;
        // }
    </script>




Field1: <input type="number" name="cin" id="a" value=""><br>
Field2: <input type="number" name="now" id="b" value=""><br>
Field3: <input type="number" id="field3"><br><br>

<button onclick="myFunction()">Copy Text</button>

<p>A function is triggered when the button is clicked. The function copies the text from Field1 into Field2.</p>

<script>
function myFunction(a,b) {
	var sum = parseInt(document.getElementById("a").value) + parseInt(document.getElementById("b").value);
    document.getElementById("field3").value = sum;
}

</script>
<input type="text" id="Num1" value="" />

    <input type="text" id="Num2" value="" /> <br>


    <button onclick="reSum()">Click</button>
    <input type="text" id="Sum" value=""/>
    <script>

        function reSum()
        {
            var num1 = parseInt(document.getElementById("Num1").value);
            var num2 = parseInt(document.getElementById("Num2").value);
            document.getElementById("Sum").value = num1 + num2;

        }

</script>
</body>
</html>
