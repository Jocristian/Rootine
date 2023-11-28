$(document).ready(function() {
  // NAV
  var burger = $(".burger");
  var items = $(".items");
  var url      = window.location.href;

  burger.click(function () {
      items.toggleClass("burger-visible");
      burger.toggleClass("burger-close");
      overlay.toggle();
      
      return false;
  });
  
  
  $(".signup").click(function () {
    window.location.href = "/login";
  });
  $(".login").click(function () {
    window.location.href = "/login?login=true";
  });
  $("#signup").click(function () {
    window.location.href = "/login";
  });
  $("#login").click(function () {
    window.location.href = "/login?login=true";
  });
  $("#signuppage").click(function () {
    window.location.href = "../login.php";
  });
  $("#loginpage").click(function () {
    window.location.href = "../login.php?login=true";
  });
  $(".loginp").click(function () {
    window.location.href = "login.php?login=true";
  });


  // Menggunakan event click pada semua elemen dengan kelas "nav-link"
  $(".nav-link").click(function() {
      // Menghapus kelas "active" dari semua elemen dengan kelas "nav-link"
      $(".nav-link").removeClass("active");
      
      // Menambahkan kelas "active" hanya pada elemen yang diklik
      $(this).addClass("active");
  });

  // Mendapatkan URL saat ini 
  var currentURL = window.location.pathname;
  // Fungsi untuk mengubah warna teks menu
  function changeMenuColor(menuID, color) {
      $(menuID).css("color", color);
  }
  // Cek lebar layar saat ini
  var windowWidth = $(window).width();

  // Screen medium
  function checkAndChangeColor() {
      var currentURL = window.location.pathname;
      var windowWidth = $(window).width();
      if (windowWidth <= 869) {
          // Cek apakah kita berada di halaman cuaca.html
          if (currentURL.includes("/cuaca.php")) {
            // Mengubah warna teks "cuaca" menjadi warna lain (misalnya, biru)
            changeMenuColor("#link-cuaca", "#435334");
          }

          // Cek apakah kita berada di halaman tanaman.html
          if (currentURL.includes("/jenistanaman.php")) {
              // Mengubah warna teks "tanaman" menjadi warna lain (misalnya, hijau)
              changeMenuColor("#link-tanaman", "#435334");
          }

          // Cek apakah kita berada di halaman Produk.html
          if (currentURL.includes("/produk.php")) {
              // Mengubah warna teks "Produk" menjadi warna lain (misalnya, merah)
              changeMenuColor("#link-produk", "#435334");
          }
      }else{
          // Screen Penuh
          if (currentURL.includes("/index.php") || currentURL.includes("/")) {
              // Mengubah warna teks "Home" menjadi oranye
              $(".nav-list#link-cuaca").css("color", "#b9a48e");
          }

          // Cek apakah kita berada di halaman cuaca.html
          if (currentURL.includes("/cuaca.php")) {
              // Mengubah warna teks "cuaca" menjadi warna lain (misalnya, biru)
              $("#link-cuaca").css("color", "#b9a48e");
          }

          // Cek apakah kita berada di halaman tanaman.html
          if (currentURL.includes("/jenistanaman.php")) {
              // Mengubah warna teks "tanaman" menjadi warna lain (misalnya, hijau)
              $("#link-tanaman").css("color", "#b9a48e");
          }

          // Cek apakah kita berada di halaman Produk.html
          if (currentURL.includes("/produk.php")) {
              // Mengubah warna teks "Produk" menjadi warna lain (misalnya, merah)
              $("#link-produk").css("color", "#b9a48e");
          }
          
      }
  }
  checkAndChangeColor();
  $(window).on('resize', checkAndChangeColor);
})

// CHAT BUTTON
var chat = document.querySelector(".chat");
var isChatVisible = false;

// Fungsi untuk menampilkan elemen chat
function showChat() {
    if (!isChatVisible) {
        chat.classList.add("active");
        isChatVisible = true;
    }
}

// Fungsi untuk menyembunyikan elemen chat
function hideChat() {
    if (isChatVisible) {
        chat.classList.remove("active");
        isChatVisible = false;
    }
}

// Tampilkan elemen chat saat halaman dimuat
showChat();

window.addEventListener("scroll", function() {
    // Sembunyikan elemen chat saat user melakukan scroll
    hideChat();
});

// Gunakan timeout untuk menampilkan kembali elemen chat setelah beberapa detik
var timeoutId;

function resetTimeout() {
    clearTimeout(timeoutId);
    timeoutId = setTimeout(showChat, 1000); 
}

// Deteksi aktivitas scroll
window.addEventListener("scroll", resetTimeout);

// Deteksi aktivitas mouse
window.addEventListener("mousemove", resetTimeout);

//SIGN-UP


//TAMBAH PESANAN
$('#addPesanan').click(function () {
  $('#modalPesanan').modal('show');
  $('#id').val('');
  $('#nama').val('').toString();
  $('#varian').val('').toString();
  $('#jumlah').val('');
  $('#alamat').val('');
  $('#username').val(value).toString();
  $('#date').val('');
  $('#status').val('').toString();
});


// CUACA
const temp = document.getElementById("temp"),
  date = document.getElementById("date-time"),
  condition = document.getElementById("condition"),
  rain = document.getElementById("rain"),
  mainIcon = document.getElementById("icon"),
  currentLocation = document.getElementById("location"),
  uvIndex = document.querySelector(".uv-index"),
  uvText = document.querySelector(".uv-text"),
  windSpeed = document.querySelector(".wind-speed"),
  sunRise = document.querySelector(".sun-rise"),
  sunSet = document.querySelector(".sun-set"),
  humidity = document.querySelector(".humidity"),
  visibilty = document.querySelector(".visibilty"),
  humidityStatus = document.querySelector(".humidity-status"),
  airQuality = document.querySelector(".air-quality"),
  airQualityStatus = document.querySelector(".air-quality-status"),
  visibilityStatus = document.querySelector(".visibilty-status"),
  searchForm = document.querySelector("#search"),
  search = document.querySelector("#query"),
  celciusBtn = document.querySelector(".celcius"),
  fahrenheitBtn = document.querySelector(".fahrenheit"),
  tempUnit = document.querySelectorAll(".temp-unit"),
  hourlyBtn = document.querySelector(".hourly"),
  weekBtn = document.querySelector(".week"),
  weatherCards = document.querySelector("#weather-cards"),
  tipsSuhu = document.querySelector(".tips-suhu"),
  produkButton = document.querySelector(".produk"),
  gambarLembab1 = document.querySelector("#gambar-lembab1"),
  gambarLembab2 = document.querySelector("#gambar-lembab2"),
  gambarLembab3 = document.querySelector("#gambar-lembab3"),
  gambarLembab4 = document.querySelector("#gambar-lembab4");

let currentCity = "";
let currentUnit = "c";
let hourlyorWeek = "week";

// function to get date and time
function getDateTime() {
  let now = new Date(),
    hour = now.getHours(),
    minute = now.getMinutes();

  let days = [
    "Minggu",
    "Senin",
    "Selasa",
    "Rabu",
    "Kamis",
    "Jumat",
    "Sabtu",
  ];
  // 12 hours format
  hour = hour % 12;
  if (hour < 10) {
    hour = "0" + hour;
  }
  if (minute < 10) {
    minute = "0" + minute;
  }
  let dayString = days[now.getDay()];
  return `${dayString}, ${hour}:${minute}`;
}

//Updating date and time
date.innerText = getDateTime();
setInterval(() => {
  date.innerText = getDateTime();
}, 1000);

// function to get public ip address
function getPublicIp() {
  fetch("https://geolocation-db.com/json/", {
    method: "GET",
    headers: {},
  })
    .then((response) => response.json())
    .then((data) => {
      currentCity = data.city;
      getWeatherData(data.city, currentUnit, hourlyorWeek);
    })
    .catch((err) => {
      console.error(err);
    });
}

getPublicIp();

// function to get weather data
function getWeatherData(city, unit, hourlyorWeek) {
  fetch(
    `https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/${city}?unitGroup=metric&key=EJ6UBL2JEQGYB3AA4ENASN62J&contentType=json`,
    {
      method: "GET",
      headers: {},
    }
  )
    .then((response) => response.json())
    .then((data) => {
      let today = data.currentConditions;
      if (unit === "c") {
        temp.innerText = today.temp;
      } else {
        temp.innerText = celciusToFahrenheit(today.temp);
      }
      updateTipsSuhu(today.temp);
      currentLocation.innerText = data.resolvedAddress;
      uvIndex.innerText = today.uvindex;
      windSpeed.innerText = today.windspeed;
      measureUvIndex(today.uvindex);
      mainIcon.src = getIcon(today.icon);
      humidity.innerText = today.humidity + "%";
      updateHumidityStatus(today.humidity);
      visibilty.innerText = today.visibility;
      updateVisibiltyStatus(today.visibility);
      airQuality.innerText = today.winddir;
      updateAirQualityStatus(today.winddir);
      if (hourlyorWeek === "hourly") {
        updateForecast(data.days[0].hours, unit, "day");
      } else {
        updateForecast(data.days, unit, "week");
      }
      sunRise.innerText = covertTimeTo12HourFormat(today.sunrise);
      sunSet.innerText = covertTimeTo12HourFormat(today.sunset);
    })
    .catch((err) => {
      alert("Maaf, kota tidak dapat ditemukan");
    });
}

//function to update Forecast
function updateForecast(data, unit, type) {
  weatherCards.innerHTML = "";
  let day = 0;
  let numCards = 0;
  if (type === "day") {
    numCards = 24;
  } else {
    numCards = 7;
  }
  for (let i = 0; i < numCards; i++) {
    let card = document.createElement("div");
    card.classList.add("card");
    let dayName = getHour(data[day].datetime);
    if (type === "week") {
      dayName = getDayName(data[day].datetime);
    }
    let dayTemp = data[day].temp;
    if (unit === "f") {
      dayTemp = celciusToFahrenheit(data[day].temp);
    }
    let iconCondition = data[day].icon;
    let iconSrc = getIcon(iconCondition);
    let tempUnit = "°C";
    if (unit === "f") {
      tempUnit = "°F";
    }
    card.innerHTML = `
                <h2 class="day-name">${dayName}</h2>
            <div class="card-icon">
              <img src="${iconSrc}" class="day-icon" alt="" />
            </div>
            <div class="day-temp">
              <h2 class="temp">${dayTemp}</h2>
              <span class="temp-unit">${tempUnit}</span>
            </div>
  `;
    weatherCards.appendChild(card);
    day++;
  }
}

// function to change weather icons
function getIcon(condition) {
  if (condition === "partly-cloudy-day") {
    return "https://i.ibb.co/PZQXH8V/27.png";
  } else if (condition === "partly-cloudy-night") {
    return "https://i.ibb.co/Kzkk59k/15.png";
  } else if (condition === "rain") {
    return "https://i.ibb.co/kBd2NTS/39.png";
  } else if (condition === "clear-day") {
    return "https://i.ibb.co/rb4rrJL/26.png";
  } else if (condition === "clear-night") {
    return "https://i.ibb.co/1nxNGHL/10.png";
  } else {
    return "https://i.ibb.co/rb4rrJL/26.png";
  }
}


//get hours from hh:mm:ss
function getHour(time) {
  let hour = time.split(":")[0];
  let min = time.split(":")[1];
  if (hour > 12) {
    hour = hour - 12;
    return `${hour}:${min} PM`;
  } else {
    return `${hour}:${min} AM`;
  }
}

// convert time to 12 hour format
function covertTimeTo12HourFormat(time) {
  let hour = time.split(":")[0];
  let minute = time.split(":")[1];
  let ampm = hour >= 12 ? "pm" : "am";
  hour = hour % 12;
  hour = hour ? hour : 12; // the hour '0' should be '12'
  hour = hour < 10 ? "0" + hour : hour;
  minute = minute < 10 ? "0" + minute : minute;
  let strTime = hour + ":" + minute + " " + ampm;
  return strTime;
}

// function to get day name from date
function getDayName(date) {
  let day = new Date(date);
  let days = [
    "Minggu",
    "Senin",
    "Selasa",
    "Rabu",
    "Kamis",
    "Jumat",
    "Sabtu",
  ];
  return days[day.getDay()];
}

// function to get uv index status
function measureUvIndex(uvIndex) {
  if (uvIndex <= 2) {
    uvText.innerText = "Rendah";
  } else if (uvIndex <= 5) {
    uvText.innerText = "Sedang";
  } else if (uvIndex <= 7) {
    uvText.innerText = "Tinggi";
  } else if (uvIndex <= 10) {
    uvText.innerText = "Sangat Tinggi";
  } else {
    uvText.innerText = "Ekstrim";
  }
}
// function to get tips
function updateTipsSuhu(temp) {
    if (temp <= 10) {
      tipsSuhu.innerText = "1. Pastikan tanaman mendapatkan cukup cahaya matahari, bahkan jika suhu rendah. \n 2. Pindahkan tanaman ke dalam ruangan jika suhu terlalu dingin atau gunakan penutup tanaman jika memungkinkan. \n 3. Kurangi frekuensi penyiraman karena tanaman cenderung membutuhkan air lebih sedikit dalam suhu rendah.";
    } else if (temp > 10 && temp < 20) {
      tipsSuhu.innerText = "1. Pastikan tanaman tetap terkena cahaya matahari yang cukup. \n 2. Lakukan penyiraman secara teratur, tetapi biarkan tanah mengering di antara penyiraman. \n 3. Pertimbangkan untuk memberikan nutrisi tambahan dengan pupuk yang sesuai.";
    } else if (temp > 20 && temp < 30) {
      tipsSuhu.innerText = "1. Pastikan tanaman mendapatkan cahaya yang cukup, tetapi hindari sinar matahari langsung yang bisa membakar daun. \n 2. Lakukan penyiraman secara teratur dan pertimbangkan untuk menyemprotkan daun untuk menjaga kelembaban. \n 3. Berikan pupuk secara berkala sesuai dengan jenis tanaman dan musim.";
    } else if (temp > 30 && temp < 40) {
        tipsSuhu.innerText = "1. Lindungi tanaman dari sinar matahari langsung selama periode panas yang ekstrem. \n 2. Pastikan penyiraman cukup untuk menjaga tanah tetap lembab, tetapi hindari overwatering. \n 3. Jika memungkinkan, gunakan penutup bayangan atau tirai peneduh untuk mengurangi suhu di sekitar tanaman.";
    } else if (temp > 40) {
      tipsSuhu.innerText = "1. Pindahkan tanaman ke tempat yang lebih sejuk seperti dalam rumah atau tempat teduh. \n 2. Seringkali penyiraman lebih sering dibutuhkan dalam suhu ekstrem ini untuk mencegah tanaman layu. \n 3. Jaga kelembaban udara di sekitar tanaman dengan menggunakan semprotan air atau penggunaan penghumidifikasi.";
    }
  }

// function to get humidity status
function updateHumidityStatus(humidity) {
  if (humidity <= 30) {
    humidityStatus.innerText = "Rendah";
  } else if (humidity <= 60) {
    humidityStatus.innerText = "Sedang";
  } else {
    humidityStatus.innerText = "Tinggi";
  }
}

//function to get recommended plant
function updateHumidityStatus(humidity){
  if (humidity <= 30) {
    gambarLembab1.setAttribute("src", "images/tanaman/padi.jpg");
    gambarLembab2.setAttribute("src", "images/tanaman/timun.jpg");
    gambarLembab3.setAttribute("src", "images/tanaman/kangkung.jpg");
    gambarLembab4.setAttribute("src", "images/tanaman/jahe.jpg");
  } else if (humidity <= 60) {
    //gambarLembab1.setAttribute("src", "images/icon.png");
    gambarLembab1.setAttribute("src", "images/tanaman/jagung.jpg");
    gambarLembab2.setAttribute("src", "images/tanaman/quinoa.jpg");
    gambarLembab3.setAttribute("src", "images/tanaman/kacanghijau.jpg");
    gambarLembab4.setAttribute("src", "images/tanaman/gandum.jpg");
  } else {
    gambarLembab1.setAttribute("src", "images/tanaman/cabaimerah.jpg");
    gambarLembab2.setAttribute("src", "images/tanaman/tomato.jpg");
    //gambarLembab1.parentElement.setAttribute("href", "padi.php");
    gambarLembab3.setAttribute("src", "images/tanaman/terung.jpg");
    gambarLembab4.setAttribute("src", "images/tanaman/paprika.jpg");
   // gambarLembab2.parentElement.setAttribute("href", "bayam.php");
    //gambarLembab3.setAttribute("src", "2_normal.png");
    //  gambarLembab4.setAttribute("src", "2_normal.png");
  }
}
// function to get visibility status
function updateVisibiltyStatus(visibility) {
  if (visibility <= 0.03) {
    visibilityStatus.innerText = "Kabut Tebal";
  } else if (visibility <= 0.16) {
    visibilityStatus.innerText = "Kabut Sedang";
  } else if (visibility <= 0.35) {
    visibilityStatus.innerText = "Kabut Tipis";
  } else if (visibility <= 1.13) {
    visibilityStatus.innerText = "Kabut Sangat Tipis";
  } else if (visibility <= 2.16) {
    visibilityStatus.innerText = "Kabut Sangat-Sangat Tipis";
  } else if (visibility <= 5.4) {
    visibilityStatus.innerText = "Kabut Paling Tipis";
  } else if (visibility <= 10.8) {
    visibilityStatus.innerText = "Udara Jernih";
  } else {
    visibilityStatus.innerText = "Udara Sangat Jernih";
  }
}

// function to get air quality status
function updateAirQualityStatus(airquality) {
  if (airquality <= 50) {
    airQualityStatus.innerText = "Baik";
  } else if (airquality <= 100) {
    airQualityStatus.innerText = "Sedang";
  } else if (airquality <= 150) {
    airQualityStatus.innerText = "Kurang Baik Bagi yang Sensitif";
  } else if (airquality <= 200) {
    airQualityStatus.innerText = "Buruk";
  } else if (airquality <= 250) {
    airQualityStatus.innerText = "Sangat Buruk";
  } else {
    airQualityStatus.innerText = "Berbahaya";
  }
}

// function to handle search form
searchForm.addEventListener("submit", (e) => {
  e.preventDefault();
  let location = search.value;
  if (location) {
    currentCity = location;
    getWeatherData(location, currentUnit, hourlyorWeek);
  }
});

// function to conver celcius to fahrenheit
function celciusToFahrenheit(temp) {
  return ((temp * 9) / 5 + 32).toFixed(1);
}


var currentFocus;
search.addEventListener("input", function (e) {
  removeSuggestions();
  var a,
    b,
    i,
    val = this.value;
  if (!val) {
    return false;
  }
  currentFocus = -1;

  a = document.createElement("ul");
  a.setAttribute("id", "suggestions");

  this.parentNode.appendChild(a);

  fetch("https://us-east-1.aws.data.mongodb-api.com/app/application-0-rjiyx/endpoint/getAllKota")
  .then(response => response.json())
  .then(data => {
    // Data dari endpoint telah diambil dan diubah menjadi objek JavaScript
    const cities = data;

    // Kode yang memproses data cities harus ditempatkan di sini, agar terlihat pada list kota
    for (i = 0; i < cities.length; i++) {
      /*check if the item starts with the same letters as the text field value:*/
      if (
        cities[i].name.substr(0, val.length).toUpperCase() == val.toUpperCase()
      ) {
        /*create a li element for each matching element:*/
        b = document.createElement("li");
        /*make the matching letters bold:*/
        b.innerHTML =
          "<strong>" + cities[i].name.substr(0, val.length) + "</strong>";
        b.innerHTML += cities[i].name.substr(val.length);
        /*insert a input field that will hold the current array item's value:*/
        b.innerHTML += "<input type='hidden' value='" + cities[i].name + "'>";
        /*execute a function when someone clicks on the item value (DIV element):*/
        b.addEventListener("click", function (e) {
          /*insert the value for the autocomplete text field:*/
          search.value = this.getElementsByTagName("input")[0].value;
          removeSuggestions();
        });
  
        a.appendChild(b);
      }
    }
  })
  .catch(error => {
    console.error("Terjadi kesalahan dalam mengambil data:", error);
  });

  
});
/*execute a function presses a key on the keyboard:*/
search.addEventListener("keydown", function (e) {
  var x = document.getElementById("suggestions");
  if (x) x = x.getElementsByTagName("li");
  if (e.keyCode == 40) {
    /*If the arrow DOWN key
      is pressed,
      increase the currentFocus variable:*/
    currentFocus++;
    /*and and make the current item more visible:*/
    addActive(x);
  } else if (e.keyCode == 38) {
    /*If the arrow UP key
      is pressed,
      decrease the currentFocus variable:*/
    currentFocus--;
    /*and and make the current item more visible:*/
    addActive(x);
  }
  if (e.keyCode == 13) {
    /*If the ENTER key is pressed, prevent the form from being submitted,*/
    e.preventDefault();
    if (currentFocus > -1) {
      /*and simulate a click on the "active" item:*/
      if (x) x[currentFocus].click();
    }
  }
});
function addActive(x) {
  /*a function to classify an item as "active":*/
  if (!x) return false;
  /*start by removing the "active" class on all items:*/
  removeActive(x);
  if (currentFocus >= x.length) currentFocus = 0;
  if (currentFocus < 0) currentFocus = x.length - 1;
  /*add class "autocomplete-active":*/
  x[currentFocus].classList.add("active");
}
function removeActive(x) {
  /*a function to remove the "active" class from all autocomplete items:*/
  for (var i = 0; i < x.length; i++) {
    x[i].classList.remove("active");
  }
}

function removeSuggestions() {
  var x = document.getElementById("suggestions");
  if (x) x.parentNode.removeChild(x);
}

fahrenheitBtn.addEventListener("click", () => {
  changeUnit("f");
});
celciusBtn.addEventListener("click", () => {
  changeUnit("c");
});

// function to change unit
function changeUnit(unit) {
  if (currentUnit !== unit) {
    currentUnit = unit;
    tempUnit.forEach((elem) => {
      elem.innerText = `°${unit.toUpperCase()}`;
    });
    if (unit === "c") {
      celciusBtn.classList.add("active");
      fahrenheitBtn.classList.remove("active");
    } else {
      celciusBtn.classList.remove("active");
      fahrenheitBtn.classList.add("active");
    }
    getWeatherData(currentCity, currentUnit, hourlyorWeek);
  }
}

hourlyBtn.addEventListener("click", () => {
  changeTimeSpan("hourly");
});
weekBtn.addEventListener("click", () => {
  changeTimeSpan("week");
});

// function to change hourly to weekly or vice versa
function changeTimeSpan(unit) {
  if (hourlyorWeek !== unit) {
    hourlyorWeek = unit;
    if (unit === "hourly") {
      hourlyBtn.classList.add("active");
      weekBtn.classList.remove("active");
    } else {
      hourlyBtn.classList.remove("active");
      weekBtn.classList.add("active");
    }
    getWeatherData(currentCity, currentUnit, hourlyorWeek);
  }
};
  
