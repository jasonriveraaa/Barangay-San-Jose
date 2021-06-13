function startTime() {
    let today = new Date();
    let ampm = today.getHours() >= 12 ? ' PM' : ' AM';
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    h = h % 12;
    h = h ? h : 12;
    let months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    let day = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    document.getElementById('txt').innerHTML = day[today.getDay()] + ", " + today.getDate() + " " + months[today.getMonth()] + " " + today.getFullYear() + " " +
    h + ":" + m + ":" + s + ampm;
    let t = setTimeout(startTime, 500);
  }
  function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
  }