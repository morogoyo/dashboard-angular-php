<style>
p {
  text-align: center;
  font-size: 60px;
}
h1 {text-align:center;}
</style>
<div class="col-lg-8">
<h1 style="text-a">Princess Launch</h1>

<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 13, 2017 00:01:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
<div><h1 >ARE YOU READY?</h1></div>
</div>


