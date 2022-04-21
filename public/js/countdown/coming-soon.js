var counter = {};
window.addEventListener("load", function () {
  // !! SET YOUR OWN END DATE IN UTC !!
  // YEAR, MONTH, DAY, HOUR, MINUTE, SECOND
  // BEWARE - MONTH IS 0 to 11, JAN = 0 > DEC = 11
  counter.end = Date.UTC(2020, 0, 1, 0, 0, 0);

  // Get the containers
  counter.day = document.getElementById("cd-day");
  counter.hr = document.getElementById("cd-hr");
  counter.min = document.getElementById("cd-min");
  counter.sec = document.getElementById("cd-sec");

  // Convert UNIX timestamp + calculate remaining time
  counter.end = Math.floor(counter.end / 1000);
  counter.remain = counter.end - Math.floor(Date.now() / 1000);

  // Start if not past end date
  if (counter.remain > 0) {
    counter.ticker = setInterval(function(){
      // Stop if passed end time
      counter.remain--;
      if (counter.remain <= 0) { clearInterval(counter.ticker); }

      // Calculate remaining time
      var secs = counter.remain;
      var days = Math.floor(secs / 86400); // 1 day = 60 secs * 60 mins * 24 hrs
      secs -= days * 86400;
      var hours = Math.floor(secs / 3600); // 1 hr = 60 secs * 60 mins
      secs -= hours * 3600;
      var mins  = Math.floor(secs / 60); // 1 min = 60 secs
      secs -= mins * 60;

      // Update HTML
      counter.day.innerHTML = days;
      counter.hr.innerHTML = hours;
      counter.min.innerHTML = mins;
      counter.sec.innerHTML = secs;
    }, 1000);
  }
});