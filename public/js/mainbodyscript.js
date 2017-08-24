
window.onload = function() {
    var wf_content = document.getElementById("weather_forecast");
    var wf_spinner = document.getElementById("spinner");
    
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(pos) {
            //console.log(pos.coords.latitude);
            //console.log(pos.coords.longitude);
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState === 4 && this.status === 200) {
                  wf_spinner.style.display = 'none';
                  wf_content.style.display = 'block';
                  wf_content.innerHTML = this.responseText;
                  console.log('Weather forecast loaded!');
              }
            };
            xhttp.open("GET", "weather/"+pos.coords.latitude+"/"+pos.coords.longitude, true);
            xhttp.send();
        });
    }
    else {
        wf_spinner.style.display = 'none';
        wf_content.style.display = 'block';
        console.log("Geolocation is not supported by this browser.");
        wf_content.innerHTML = "Usługa geolokacji nie jest dostępna w tej przeglądarce.";
    }
};
