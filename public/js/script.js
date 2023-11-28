$(document).ready(function() {
  // NAV
  var burger = $(".burger");
  var items = $(".items");

  burger.click(function () {
      items.toggleClass("burger-visible");
      burger.toggleClass("burger-close");
      overlay.toggle();
      
      return false;
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
          if (currentURL.includes("/cuaca.html")) {
            // Mengubah warna teks "cuaca" menjadi warna lain (misalnya, biru)
            changeMenuColor("#link-cuaca", "#435334");
          }

          // Cek apakah kita berada di halaman tanaman.html
          if (currentURL.includes("/tanaman.html")) {
              // Mengubah warna teks "tanaman" menjadi warna lain (misalnya, hijau)
              changeMenuColor("#link-tanaman", "#435334");
          }

          // Cek apakah kita berada di halaman Produk.html
          if (currentURL.includes("/produk.html")) {
              // Mengubah warna teks "Produk" menjadi warna lain (misalnya, merah)
              changeMenuColor("#link-produk", "#435334");
          }
      }else{
          // Screen Penuh
          if (currentURL.includes("/home.html") || currentURL.includes("/")) {
              // Mengubah warna teks "Home" menjadi oranye
              $(".nav-list#link-cuaca").css("color", "#b9a48e");
          }

          // Cek apakah kita berada di halaman cuaca.html
          if (currentURL.includes("/cuaca.html")) {
              // Mengubah warna teks "cuaca" menjadi warna lain (misalnya, biru)
              $("#link-cuaca").css("color", "#b9a48e");
          }

          // Cek apakah kita berada di halaman tanaman.html
          if (currentURL.includes("/tanaman.html")) {
              // Mengubah warna teks "tanaman" menjadi warna lain (misalnya, hijau)
              $("#link-tanaman").css("color", "#b9a48e");
          }

          // Cek apakah kita berada di halaman Produk.html
          if (currentURL.includes("/produk.html")) {
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

//  LOGIN //
$(".info-item .btn").click(function(){
  $(".container").toggleClass("log-in");
});
$(".container-form .btn").click(function(){
  setTimeout(function(){
      $(".container").addClass("active");
      setTimeout(function(){
          window.location.href = "index.html";
      },1500);
  },250);
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
    gambarLembab1.setAttribute("src", "aset/images/padi.jpg");
  } else if (humidity <= 60) {
    gambarLembab1.setAttribute("src", "aset/images/icon.png");
  } else {
    gambarLembab1.setAttribute("src", "aset/images/tanaman/tomato.jpg");
    gambarLembab1.parentElement.setAttribute("href", "informasipadi.html");
    gambarLembab2.setAttribute("src", "aset/images/tanaman/bayam.jpg");
    gambarLembab2.parentElement.setAttribute("href", "tautan2.html");
    gambarLembab3.setAttribute("src", "2_normal.png");
    gambarLembab4.setAttribute("src", "2_normal.png");
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





// Cities add your own to get in search

cities = [
{
country: "ID",
name: "Ambarawa",
lat: "-7.26198",
lng: "110.393",
},
  {
    country: "ID",
    name: "Ambon",
    lat: "-3.70218",
    lng: "128.187",
  },
  {
    country: "ID",
    name: "Ampel, Boyolali",
    lat: "-7.45338",
    lng: "110.55618",
  },
  {
    country: "ID",
    name: "Ampenan",
    lat: "-8.576",
    lng: "71.74344",
  },
  {
    country: "ID",
    name: "Asahan",
    lat: "2.98124",
    lng: "99.6223",
  },
  {
    country: "ID",
    name: "Asembagus",
    lat: "-7.74995",
    lng: "114.21306",
  },
  {
    country: "ID",
    name: "Atambua",
    lat: "-9.11332",
    lng: "124.892",
  },
  {
    country: "ID",
    name: "Babad",
    lat: "-7.32385",
    lng: "112.00764",
  },
  {
    country: "ID",
    name: "Bali, Indonesia",
    lat: "-8.67321",
    lng: "115.203",
  },
  {
    country: "ID",
    name: "Balikpapan",
    lat: "-1.1589",
    lng: "116.868",
  },
  {
    country: "ID",
    name: "Banda Aceh",
    lat: "5.55464",
    lng: "95.3209",
  },
  {
    country: "ID",
    name: "Bandar Lampung",
    lat: "-5.14226",
    lng: "105.702",
  },
  {
    country: "ID",
    name: "Bandung",
    lat: "-6.91391",
    lng: "107.61",
  },
  {
    country: "ID",
    name: "Bangil",
    lat: "-7.60402",
    lng: "112.82065",
  },
  {
    country: "ID",
    name: "Bangilan",
    lat: "-6.95219",
    lng: "111.7304",
  },
  {
    country: "ID",
    name: "Bangka",
    lat: "-1.90355",
    lng: "105.921",
  },
  {
    country: "ID",
    name: "Bangkalan",
    lat: "-7.03382",
    lng: "112.744",
  },
  {
    country: "ID",
    name: "Banjarmasin",
    lat: "-3.32877",
    lng: "114.592",
  },
  {
    country: "ID",
    name: "Banjarnegara",
    lat: "-7.39978",
    lng: "109.681",
  },
  {
    country: "ID",
    name: "Banyubiru",
    lat: "-7.3079",
    lng: "110.421",
  },
  {
    country: "ID",
    name: "Banyumas",
    lat: "-7.52381",
    lng: "109.294",
  },
  {
    country: "ID",
    name: "Banyuwangi",
    lat: "-8.23648",
    lng: "114.359",
  },
  {
    country: "ID",
    name: "Batam",
    lat: "1.08902",
    lng: "104.034",
  },
  {
    country: "ID",
    name: "Badung",
    lat: "-8.58019",
    lng: "115.181",
  },
  {
    country: "ID",
    name: "Batanghari",
    lat: "-5.14488",
    lng: "105.375",
  },
  {
    country: "ID",
    name: "Batu",
    lat: "-7.86884",
    lng: "112.52",
  },
  {
    country: "ID",
    name: "Bekasi",
    lat: "-6.25667",
    lng: "106.991",
  },
  {
    country: "ID",
    name: "Benoa",
    lat: "-8.80017",
    lng: "115.208",
  },
  {
    country: "ID",
    name: "Besuki",
    lat: "-8.20897",
    lng: "111.784",
  },
  {
    country: "ID",
    name: "Binangun",
    lat: "-7.68802",
    lng: "109.268",
  },
  {
    country: "ID",
    name: "Binjai",
    lat: "3.60183",
    lng: "98.4817",
  },
  {
    country: "ID",
    name: "Bitung",
    lat: "1.44626",
    lng: "125.122",
  },
  {
    country: "ID",
    name: "Blambangan",
    lat: "-4.89612",
    lng: "105.028",
  },
  {
    country: "ID",
    name: "Belitang",
    lat: "-4.1501",
    lng: "104.639",
  },
  {
    country: "ID",
    name: "Belitung",
    lat: "-3.04624",
    lng: "107.765",
  },
  {
    country: "ID",
    name: "Bendungan",
    lat: "-7.97104",
    lng: "111.69126",
  },
  {
    country: "ID",
    name: "Bengkalis",
    lat: "1.45746",
    lng: "102.195",
  },
  {
    country: "ID",
    name: "Bengkulu",
    lat: "-3.79116",
    lng: "102.263",
  },
  {
    country: "ID",
    name: "Blitar",
    lat: "-8.09897",
    lng: "112.165",
  },
  {
    country: "ID",
    name: "Blora",
    lat: "-6.96975",
    lng: "111.403",
  },
  {
    country: "ID",
    name: "Bluluk",
    lat: "-7.3163",
    lng: "112.13038",
  },
  {
    country: "ID",
    name: "Bogor",
    lat: "-6.59994",
    lng: "106.805",
  },
  {
    country: "ID",
    name: "Bojonegoro",
    lat: "-7.16834",
    lng: "111.892",
  },
  {
    country: "ID",
    name: "Bondowoso",
    lat: "-7.90773",
    lng: "113.813",
  },
  {
    country: "ID",
    name: "Bonjol",
    lat: "-0.00735",
    lng: "100.23907",
  },
  {
    country: "ID",
    name: "Bontang",
    lat: "0.05811",
    lng: "117.413",
  },
  {
    country: "ID",
    name: "Borobudur",
    lat: "-7.62289",
    lng: "110.204",
  },
  {
    country: "ID",
    name: "Boyolali",
    lat: "-7.50397",
    lng: "110.577",
  },
  {
    country: "ID",
    name: "Brebes",
    lat: "-6.87665",
    lng: "109.066",
  },
  {
    country: "ID",
    name: "Bringin",
    lat: "-7.42309",
    lng: "111.588",
  },
  {
    country: "ID",
    name: "Brondong",
    lat: "-6.9067",
    lng: "112.222",
  },
  {
    country: "ID",
    name: "Bubulan",
    lat: "-7.32573",
    lng: "111.85079",
  },
  {
    country: "ID",
    name: "Bukittinggi",
    lat: "-0.30066",
    lng: "100.374",
  },
  {
    country: "ID",
    name: "Bulakamba",
    lat: "-6.87483",
    lng: "108.927",
  },
  {
    country: "ID",
    name: "Buleleng",
    lat: "-8.11592",
    lng: "115.09",
  },
  {
    country: "ID",
    name: "Bulukerto",
    lat: "-7.78606",
    lng: "111.228",
  },
  {
    country: "ID",
    name: "Bululawang",
    lat: "-8.10185",
    lng: "112.651",
  },
  {
    country: "ID",
    name: "Bulungan",
    lat: "2.72513",
    lng: "117.401",
  },
  {
    country: "ID",
    name: "Bumiayu",
    lat: "-7.26178",
    lng: "108.976",
  },
  {
    country: "ID",
    name: "Bumi Jaya",
    lat: "0.97704",
    lng: "117.78961",
  },
  {
    country: "ID",
    name: "Bungah",
    lat: "-7.03335",
    lng: "112.576",
  },
  {
    country: "ID",
    name: "Calang",
    lat: "4.81873",
    lng: "95.6667",
  },
  {
    country: "ID",
    name: "Camba",
    lat: "-4.91576",
    lng: "119.84573",
  },
  {
    country: "ID",
    name: "Campur Darat",
    lat: "-8.15954",
    lng: "111.87011",
  },
  {
    country: "ID",
    name: "Candikesuma",
    lat: "-8.30173",
    lng: "114.516",
  },
  {
    country: "ID",
    name: "Candiroto",
    lat: "-7.19219",
    lng: "110.06082",
  },
  {
    country: "ID",
    name: "Ceper",
    lat: "-7.67709",
    lng: "110.672",
  },
  {
    country: "ID",
    name: "Ciamis",
    lat: "-7.32616",
    lng: "108.353",
  },
  {
    country: "ID",
    name: "Cianjur",
    lat: "-6.8189",
    lng: "107.131",
  },
  {
    country: "ID",
    name: "Ciawi",
    lat: "-7.14521",
    lng: "108.147",
  },
  {
    country: "ID",
    name: "Cibadak",
    lat: "-6.8739",
    lng: "106.742",
  },
  {
    country: "ID",
    name: "Cibinong",
    lat: "-6.49122",
    lng: "106.845",
  },
  {
    country: "ID",
    name: "Cibodas",
    lat: "-6.18819",
    lng: "106.603",
  },
  {
    country: "ID",
    name: "Cicalengka",
    lat: "-6.99363",
    lng: "107.844",
  },
  {
    country: "ID",
    name: "Cikampek",
    lat: "-6.41565",
    lng: "107.443",
  },
  {
    country: "ID",
    name: "Cialacap",
    lat: "-7.64646",
    lng: "109.042",
  },
  {
    country: "ID",
    name: "Ciledug",
    lat: "-6.22644",
    lng: "106.713",
  },
  {
    country: "ID",
    name: "Cilegon",
    lat: "-6.02594",
    lng: "106.047",
  },
  {
    country: "ID",
    name: "Cililin",
    lat: "-6.95704",
    lng: "107.451",
  },
  {
    country: "ID",
    name: "Cimahi",
    lat: "-6.87961",
    lng: "107.541",
  },
  {
    country: "ID",
    name: "Cipanas",
    lat: "-6.71347",
    lng: "107.016",
  },
  {
    country : "ID",
    name:"Cirebon",
    lat:"-6.71299",
    lng:"108.566",
},

{
    country : "ID",
    name:"Cisalak",
    lat:"-6.7195",
    lng:"107.767",
},

{
    country : "ID",
    name:"Cisarua",
    lat:"-6.68011",
    lng:"106.932",
},

{
    country : "ID",
    name:"Citarum",
    lat:"-6.904691",
    lng:"107.617",
},

{
    country : "ID",
    name:"Ciwaringin",
    lat:"-6.67325",
    lng:"108.389",
},

{
    country : "ID",
    name:"Ciwulan",
    lat:"-6.25428",
    lng:"107.438",
},

{
    country : "ID",
    name:"Dampit",
    lat:"-8.19739",
    lng:"112.729",
},

{
    country : "ID",
    name:"Demak",
    lat:"-6.90001",
    lng:"110.633",
},

{
    country : "ID",
    name:"Denpasar",
    lat:"-8.67321",
    lng:"115.203",
},

{
    country : "ID",
    name:"Depok",
    lat:"-6.36092",
    lng:"106.833",
},

{
    country : "ID",
    name:"Dieng, Indonesia",
    lat:"-7.20346",
    lng:"-109.91114",
},

{
    country : "ID",
    name:"Donggala",
    lat:"0.48749",
    lng:"120.018",
},

{
    country : "ID",
    name:"Donohudan,Boyolali",
    lat:"-7.51529",
    lng:"110.777",
},

{
    country : "ID",
    name:"Duduksampeyan,Gresik",
    lat:"-7.16079",
    lng:"112.532",
},

{
    country : "ID",
    name:"Eitape",
    lat:"-3.13767",
    lng:"142.35",
},

{
    country : "ID",
    name:"Eitape",
    lat:"-3.13767",
    lng:"142.35",
},

{
    country : "ID",
    name:"Enrekang,Makasar",
    lat:"-3.5283",
    lng:"119.773",
},

{
    country : "ID",
    name:"Fakfak,Jayapura",
    lat:"-2.93016",
    lng:"132.294",
},

{
    country : "ID",
    name:"Galseong,Takalar",
    lat:"-5.32364",
    lng:"1119.379",
},

{
    country : "ID",
    name:"Garut",
    lat:"-7.18644",
    lng:"107.889",
},

{
    country : "ID",
    name:"Gianyar",
    lat:"-8.54137",
    lng:"115.325",
},

{
    country : "ID",
    name:"Gilimanuk",
    lat:"-8.1629",
    lng:"114.437",
},

{
    country : "ID",
    name:"Glagah,Lamongan",
    lat:"-7.07526",
    lng:"112.519",
},

{
    country : "ID",
    name:"Godean,Sleman",
    lat:"-7.7681",
    lng:"110.295",
},

{
    country : "ID",
    name:"Gorontalo",
    lat:"0.53707",
    lng:"123.062",
},

{
    country : "ID",
    name:"Gresik",
    lat:"-7.16806",
    lng:"112.645",
},

{
    country : "ID",
    name:"Gringsing,Batang",
    lat:"-6.978",
    lng:"109.99",
},

{
    country : "ID",
    name:"Grobogan",
    lat:"-7.02328",
    lng:"110.921",
},

{
    country : "ID",
    name:"Habinsaran,Toba Samosir",
    lat:"2.31085",
    lng:"99.34127",
},

{
    country : "ID",
    name:"Halmahera",
    lat:"0.94081",
    lng:"128.39144",
},

{
    country : "ID",
    name:"Imogiri,Bantul",
    lat:"-7.92531",
    lng:"110.4",
},

{
    country : "ID",
    name:"Indragiri,Rancabali Bandung",
    lat:"-7.12624",
    lng:"107.341",
},

{
    country : "ID",
    name:"Indramayu",
    lat:"-6.3479",
    lng:"108.33",
},

{
    country : "ID",
    name:"Jabung,Malang",
    lat:"-7.94137",
    lng:"112.752",
},

{
    country : "ID",
    name:"Jakarta",
    lat:"-6.17148",
    lng:"106.826",
},

{
    country : "ID",
    name:"Jambi",
    lat:"-1.61777",
    lng:"103.599",
},

{
    country : "ID",
    name:"Jatinegara,Jakarta Timur",
    lat:"-6.23265",
    lng:"106.88539",
},

{
    country : "ID",
    name:"Jatiroto,Lumajang",
    lat:"-8.11859",
    lng:"113.325",
},

{
    country : "ID",
    name:"Jayapura",
    lat:"-2.56147",
    lng:"140.711",
},

{
    country : "ID",
    name:"Jember",
    lat:"-8.19678",
    lng:"113.635",
},

{
    country : "ID",
    name:"Jembrana",
    lat:"-8.35789",
    lng:"114.634",
},

{
    country : "ID",
    name:"Jenggawa",
    lat:"-8.25795",
    lng:"113.67412",
},

{
    country : "ID",
    name:"Jepara",
    lat:"-6.57542",
    lng:"110.683",
},

{
    country : "ID",
    name:"Jepitu",
    lat:"-8.14945",
    lng:"110.70872",
},

{
    country : "ID",
    name:"Jetis",
    lat:"-7.78289",
    lng:"110.365",
},

{
    country : "ID",
    name:"Jimbaran,Kuta Selatan",
    lat:"-8.79427",
    lng:"115.163",
},

{
    country : "ID",
    name:"Jombang",
    lat:"-7.54373",
    lng:"112.218",
},

{
    country : "ID",
    name:"Juwono,Nganjuk",
    lat:"-7.63656",
    lng:"112.09412",
},

{
    country : "ID",
    name:"Kalasan,Sleman",
    lat:"-7.76191",
    lng:"110.47596",
},

{
    country : "ID",
    name:"Kalianget, Sumenep",
    lat:"-7.03696",
    lng:"113.89618",
},

{
    country : "ID",
    name:"Kaliwungu, Kudus",
    lat:"-6.7899",
    lng:"110.79442",
},

{
    country : "ID",
    name:"Kandangan, Makassar",
    lat:"-2.69091",
    lng:"115.21",
},

{
    country : "ID",
    name:"Kanigoro",
    lat:"-8.13237",
    lng:"112.21143",
},

{
    country : "ID",
    name:"Karangampel",
    lat:"-6.47128",
    lng:"108.45837",
},

{
    country : "ID",
    name:"Karanganyar",
    lat:"-7.60855",
    lng:"110.983",
},

{
    country : "ID",
    name:"Karang Anyar(Solo)",
    lat:"-7.56969",
    lng:"109.80955",
},

{
    country : "ID",
    name:"Karangasem",
    lat:"-8.45989",
    lng:"115.626",
},

{
    country : "ID",
    name:"Karang Binangun",
    lat:"-7.0286",
    lng:"112.47152",
},

{
    country : "ID",
    name:"Karanggede, Boyolali",
    lat:"-7.36182",
    lng:"110.66579",
},

{
    country : "ID",
    name:"Karangpandan",
    lat:"-7.61504",
    lng:"111.068",
},

{
    country : "ID",
    name:"Karangrejo",
    lat:"-8.01702",
    lng:"111.89725",
},

{
    country : "ID",
    name:"Karangrejo,Tulungagung",
    lat:"-8.01702",
    lng:"111.89725",
},

{
    country : "ID",
    name:"Karimun",
    lat:"- 0.99998",
    lng:"103.431",
},

{
    country : "ID",
    name:"Karimunjawa, Jepara",
    lat:"-5.83823",
    lng:"110.443",
},

{
    country : "ID",
    name:"Kebayoran Lama, Jakarta Selatan",
    lat:"-6.26386",
    lng:"106.775",
},

{
    country : "ID",
    name:"Kebonagung, Demak",
    lat:"-6.99874",
    lng:"110.69645",
},

{
    country : "ID",
    name:"Kebumen",
    lat:"-7.69519",
    lng:"109.684",
},

{
    country : "ID",
    name:"Kediri",
    lat:"-7.82577",
    lng:"112.011",
},

{
    country : "ID",
    name:"Kedungombo Kel., Baturetno, Wonogiri",
    lat:"-7.93851",
    lng:"110.93796",
},

{
    country : "ID",
    name:"Kejayan, Pasuruan",
    lat:"-7.69535",
    lng:"112.87876",
},

{
    country : "ID",
    name:"Kemiri, Purworejo",
    lat:"-7.64353",
    lng:"109.91923",
},

{
    country : "ID",
    name:"Kemusu, Boyolali",
    lat:"-7.26981",
    lng:"110.72185",
},

{
    country : "ID",
    name:"Kencong, Jember",
    lat:"-8.27562",
    lng:"113.3716",
},

{
    country : "ID",
    name:"Kendal",
    lat:"-6.92165",
    lng:"110.204",
},

{
    country : "ID",
    name:"Kendari",
    lat:"-3.97245",
    lng:"122.585",
},

{
    country : "ID",
    name:"Kepanjen, Malang",
    lat:"-8.13262",
    lng:"112.57161",
},

{
    country : "ID",
    name:"Kerinci",
    lat:"-2.19158",
    lng:"101.61823",
},

{
    country : "ID",
    name:"Kertapati, Palembang",
    lat:"-3.02878",
    lng:"104.7261",
},

{
    country : "ID",
    name:"Kertosono, Nganjuk",
    lat:"-7.60142",
    lng:"112.09472",
},

{
    country : "ID",
    name:"Kertosono, Nganjuk",
    lat:"-7.60142",
    lng:"112.09472",
},

{
    country : "ID",
    name:"Kesamben, Jombang",
    lat:"-7.48309",
    lng:"112.333",
},

{
    country : "ID",
    name:"Ketanggungan, Brebes",
    lat:"-6.98181",
    lng:"108.90358",
},

{
    country : "ID",
    name:"Ketapang",
    lat:"-1.59233",
    lng:"110.62701",
},

{
    country : "ID",
    name:"Kintamani, Bangli",
    lat:"-8.24402",
    lng:"115.327",
},

{
    country : "ID",
    name:"Klaten",
    lat:"-7.70022",
    lng:"110.605",
},

{
    country : "ID",
    name:"Kota Agung, Tanggamus",
    lat:"-5.50317",
    lng:"104.63904",
},

{
    country : "ID",
    name:"Kota Baru",
    lat:"-2.92",
    lng:"115.774",
},

{
    country : "ID",
    name:"Kotagede, Yogyakarta",
    lat:"-7.82034",
    lng:"110.4011",
},

{
    country : "ID",
    name:"Kota Pinang, Labuhanbatu Selatan",
    lat:"1.89071",
    lng:"100.10498",
},

{
    country : "ID",
    name:"Kotawaringin Kel., Puding Besar, Bangka",
    lat:"-2.11602",
    lng:"105.78492",
},

{
    country : "ID",
    name:"Kraksaan, Probolinggo",
    lat:"-7.74868",
    lng:"113.44872",
},

{
    country : "ID",
    name:"Krian, Sidoarjo",
    lat:"-7.41077",
    lng:"112.579",
},

{
    country : "ID",
    name:"Kudus",
    lat:"-6.82424",
    lng:"110.835",
},

{
    country : "ID",
    name:"Kupang",
    lat:"-10.1572",
    lng:"123.66",
},

{
    country : "ID",
    name:"kutai kalimantan",
    lat:"-3.43341",
    lng:"114.8421",
},

{
    country : "ID",
    name:"Lamongan",
    lat:"-7.10837",
    lng:"112.398",
},

{
    country : "ID",
    name:"Larantuka, Flores Timur",
    lat:"-8.3186",
    lng:"123.00725",
},

{
    country : "ID",
    name:"Lasem, Rembang",
    lat:"-6.69109",
    lng:"111.452",
},

{
    country : "ID",
    name:"Lawang, Malang",
    lat:"-7.83453",
    lng:"112.697",
},

{
    country : "ID",
    name:"Leces, Probolinggo",
    lat:"-7.89958",
    lng:"113.2511",
},

{
    country : "ID",
    name:"Lemahabang, Cirebon",
    lat:"-6.82531",
    lng:"108.61913",
},

{
    country : "ID",
    name:"Lembang, Bandung",
    lat:"-6.8019",
    lng:"107.65",
},

{
    country : "ID",
    name:"Lhokseumawe",
    lat:"5.19217",
    lng:"97.117",
},

{
    country : "ID",
    name:"Linggartjati, Jawa barat",
    lat:"-6.23347",
    lng:"107.02078",
},

{
    country : "ID",
    name:"Lombok",
    lat:"-8.58539",
    lng:"116.088",
},

{
    country : "ID",
    name:"Lubuklinggau",
    lat:"-3.26931",
    lng:"102.91",
},

{
    country : "ID",
    name:"Lumajang",
    lat:"-8.12644",
    lng:"113.226",
},

{
    country : "ID",
    name:"Madiun",
    lat:"-7.59138",
    lng:"111.572",
},

{
    country : "ID",
    name:"Magelang",
    lat:"-7.46077",
    lng:"110.223",
},

{
    country : "ID",
    name:"Magetan",
    lat:"-7.6489",
    lng:"111.343",
},

{
    country : "ID",
    name:"Majalengka",
    lat:"-6.83484",
    lng:"108.247",
},

{
    country : "ID",
    name:"Majene",
    lat:"-3.0391",
    lng:"118.859",
},

{
    country : "ID",
    name:"Makasar, Jakarta Timur",
    lat:"-6.28505",
    lng:"106.902",
},

{
    country : "ID",
    name:"Malaka",
    lat:"-9.57497",
    lng:"124.89605",
},

{
    country : "ID",
    name:"Manado",
    lat:"1.48701",
    lng:"124.84",
},

{
    country : "ID",
    name:"Manggarai",
    lat:"-8.6112",
    lng:"120.468",
},

{
    country : "ID",
    name:"Maninjau Kel., Tanjung Raya, Agam",
    lat:"-0.30709",
    lng:"100.22654",
},

{
    country : "ID",
    name:"Manokwari",
    lat:"-0.86058",
    lng:"134.066",
},

{
    country : "ID",
    name:"Mantingan, Ngawi",
    lat:"-7.36497",
    lng:"111.159",
},

{
    country : "ID",
    name:"Medan",
    lat:"3.59211",
    lng:"98.6769",
},

{
    country : "ID",
    name:"Mendawai, Katingan",
    lat:"-3.0437",
    lng:"113.19866",
},

{
    country : "ID",
    name:"Mendut Kel., Mungkid, Magelang Kabupaten",
    lat:"-7.59948",
    lng:"110.23321",
},

{
    country : "ID",
    name:"Menggala, Tulangbawang",
    lat:"-4.53123",
    lng:"105.22009",
},

{
    country : "ID",
    name:"Menoreh Kel., Salaman, Magelang Kabupaten",
    lat:"-7.58321",
    lng:"110.13206",
},

{
    country : "ID",
    name:"mentawai, sumatra barat",
    lat:"-0.90569",
    lng:"100.348",
},

{
    country : "ID",
    name:"Mentaya Hulu, Kotawaringin Timur",
    lat:"-2.19445",
    lng:"112.642",
},


{
    country : "ID",
    name:"Merak Kel., Dempet, Demak",
    lat:"-7.01081",
    lng:"110.75651",
},

{
    country : "ID",
    name:"Merauke",
    lat:"-8.52206",
    lng:"140.393",
},

{
    country : "ID",
    name:"Minahasa",
    lat:"1.20939",
    lng:"124.909",
},

{
    country : "ID",
    name:"Modung, Bangkalan",
    lat:"-7.18599",
    lng:"112.935",
},

{
    country : "ID",
    name:"Mojokerto",
    lat:"-7.46403",
    lng:"112.432",
},

{
    country : "ID",
    name:"Mojowarno, Jombang",
    lat:"-7.59607",
    lng:"112.31691",
},

{
    country : "ID",
    name:"Mranggen, Demak",
    lat:"-7.02628",
    lng:"110.51816",
},

{
    country : "ID",
    name:"Muncar, Banyuwangi",
    lat:"-8.46379",
    lng:"114.315",
},

{
    country : "ID",
    name:"Muntilan, Magelang",
    lat:"-7.57895",
    lng:"110.28",
},

{
    country : "ID",
    name:"Muntok, Bangka",
    lat:"-2.01956",
    lng:"105.24177",
},

{
    country : "ID",
    name:"Negara, Jembrana, Bali",
    lat:"-8.35091",
    lng:"114.59547",
},

{
    country : "ID",
    name:"Negeri Batin Kel., Blambangan Umpu, Way Kanan, Jakarta",
    lat:"-4.61552",
    lng:"104.50426",
},

{
    country : "ID",
    name:"Negeri Besar, Way Kanan, Jakarta",
    lat:"-4.4268",
    lng:"104.97573",
},

{
    country : "ID",
    name:"Negeri Ratu Kel., Bunga Mayang, Ogan Komering Ulu Timur, Jakarta",
    lat:"-4.37265",
    lng:"104.25384",
},

{
    country : "ID",
    name:"Ngadiluwih, Kediri Kabupaten",
    lat:"-7.88993",
    lng:"111.99526",
},

{
    country : "ID",
    name:"Ngadirejo, Temanggung",
    lat:"-7.24071",
    lng:"110.04731",
},

{
    country : "ID",
    name:"Ngambon, Bojonegoro",
    lat:"-7.32445",
    lng:"111.72578",
},

{
    country : "ID",
    name:"Nganjuk",
    lat:"-7.60055",
    lng:"111.921",
},

{
    country : "ID",
    name:"Ngawen, Blora",
    lat:"-7.02099",
    lng:"111.30208",
},

{
    country : "ID",
    name:"Ngawi",
    lat:"-7.42374",
    lng:"111.426",
},

{
    country : "ID",
    name:"Ngebel, Ponorogo",
    lat:"-7.79802",
    lng:"111.60512",
},

{
    country : "ID",
    name:"Ngoro, Jombang",
    lat:"-7.68558",
    lng:"112.25586",
},

{
    country : "ID",
    name:"Ngunut, Tulungagung",
    lat:"-8.09502",
    lng:"111.991",
},

{
    country : "ID",
    name:"Nunukan",
    lat:"4.19828",
    lng:"117.22873",
},

{
    country : "ID",
    name:"Nusapenida, Klungkung",
    lat:"-8.67391",
    lng:"115.552",
},

{
    country : "ID",
    name:"Batam",
    lat:"1.08902",
    lng:"104.03423",
},

{
    country : "ID",
    name:"pulau bawean, Jawa timur",
    lat:"-7.99511",
    lng:"112.6264",
},

{
    country : "ID",
    name:"Bengkalis",
    lat:"1.45746",
    lng:"102.19468",
},

{
    country : "ID",
    name:"Komodo, Manggarai Barat",
    lat:"-8.619",
    lng:"119.836",
},

{
    country : "ID",
    name:"P. Padang",
    lat:"-3.27053",
    lng:"104.87838",
},

{
    country : "ID",
    name:"Wangi-Wangi, Wakatobi",
    lat:"-5.29266",
    lng:"123.59845",
},

{
    country : "ID",
    name:"Paciran, Lamongan",
    lat:"-6.87031",
    lng:"112.345",
},

{
    country : "ID",
    name:"Rangsang, Kepulauan Meranti",
    lat:"0.88001",
    lng:"103.09148",
},

{
    country : "ID",
    name:"Waigeo,Papua",
    lat:"-0.86653",
    lng:"131.25113",
},
{
    country: "ID",
    name: "Pacitan, Indonesia",
    lat: "-8.2259",
    lng: "111.071",
}, 
    
{
    country: "ID",
    name: "Padalarang, Bandung Barat, Indonesia",
    lat: "-6.84636",
    lng: "107.49",
}, 
    
{
    country: "ID",
    name: "Padang, Indonesia",
    lat: "-0.94825",
    lng: "100.355",
}, 
    
{
    country: "ID",
    name: "Padangan, Bojonegoro, Indonesia",
    lat: "-7.16268",
    lng: "111.637",
}, 
    
{
    country: "ID",
    name: "Paiton, Probolinggo, Indonesia",
    lat: "-7.71794",
    lng: "113.555",
}, 
    
{
    country: "ID",
    name: "Pajangan, Bantul, Indonesia",
    lat: "-7.8776",
    lng: "110.268",
}, 
    
{
    country: "ID",
    name: "Pakisaji",
    lat: "-8.04677",
    lng: "112.607",
}, 
    
{
    country: "ID",
    name: "Paleleh",
    lat: "1.02346",
    lng: "121.962",
}, 
    
{
    country: "ID",
    name: "Palembang",
    lat: "-2.98485",
    lng: "104.759",
}, 
    
{
    country: "ID",
    name: "Palembayan",
    lat: "-0.16013",
    lng: "100.16866",
}, 
    
{
    country: "ID",
    name: "Pamekasan",
    lat: "-7.15246",
    lng: "113.46692",
}, 
    
{
    country: "ID",
    name: "Pamotan",
    lat: "-6.75778",
    lng: "111.46387",
}, 
    
{
    country: "ID",
    name: "Panarukan",
    lat: "-7.70125",
    lng: "113.95285",
},
    
{
    country: "ID",
    name: "Panceng",
    lat: "-6.92126",
    lng: "112.46259",
}, 
    
{
    country: "ID",
    name: "Pandaan",
    lat: "-7.65988",
    lng: "112.692",
}, 
    
{
    country: "ID",
    name: "Pandeglang",
    lat: "-6.31687",
    lng: "106.115",
}, 
    
{
    country: "ID",
    name: "Pangandaran",
    lat: "-7.64892",
    lng: "108.65",
}, 
    
{
    country: "ID",
    name: "Parengan",
    lat: "-7.06551",
    lng: "111.83652",
}, 
    
{
    country: "ID",
    name: "Pasuruan",
    lat: "-7.64108",
    lng: "112.906",
}, 
    
{
    country: "ID",
    name: "Pekalongan",
    lat: "-6.88884",
    lng: "109.666",
}, 
    
{
    country: "ID",
    name: "Pekanbaru",
    lat: "0.49197",
    lng: "101.419",
}, 
    
{
    country: "ID",
    name: "Pelabuhanratu",
    lat: "-6.98796",
    lng: "106.54614",
}, 
    
{
    country: "ID",
    name: "Pelalawan",
    lat: "0.36225",
    lng: "101.89914",
}, 
    
{
    country: "ID",
    name: "Pemalang",
    lat: "-6.87283",
    lng: "109.372",
}, 
    
{
    country: "ID",
    name: "Pematangsiantar",
    lat: "2.95779",
    lng: "99.0677",
}, 
    
{
    country: "ID",
    name: "Plumpang",
    lat: "-7.03007",
    lng: "112.12548",
}, 
    
{
    country: "ID",
    name: "Ponorogo",
    lat: "-7.86507",
    lng: "111.452",
}, 
    
{
    country: "ID",
    name: "Pontianak",
    lat: "-0.01986",
    lng: "109.336",
}, 
    
{
    country: "ID",
    name: "Popoh",
    lat: "-8.12454",
    lng: "112.34354",
}, 
    
{
    country: "ID",
    name: "Prambanan",
    lat: "-7.75447",
    lng: "110.51035",
}, 
    
{
    country: "ID",
    name: "Prigen",
    lat: "-7.71599",
    lng: "112.65808",
}, 
    
{
    country: "ID",
    name: "Probolinggo",
    lat: "-7.76197",
    lng: "113.235",
}, 
    
{
    country: "ID",
    name: "Puncak",
    lat: "-3.81241",
    lng: "137.844",
}, 
    
{
    country: "ID",
    name: "Purwakarta",
    lat: "-6.53209",
    lng: "107.463",
}, 
    
{
    country: "ID",
    name: "Rambipuji",
    lat: "-8.20729",
    lng: "113.59361",
}, 
    
{
    country: "ID",
    name: "Randuagung",
    lat: "-8.07082",
    lng: "113.31341",
}, 
    
{
    country: "ID",
    name: "Randudongkal",
    lat: "-7.08519",
    lng: "109.30253",
}, 
    
{
    country: "ID",
    name: "Rembang",
    lat: "-6.70619",
    lng: "111.365",
}, 
    
{
    country: "ID",
    name: "Rengasdengklok",
    lat: "-6.20235",
    lng: "107.29987",
}, 
    
{
    country: "ID",
    name: "Riau",
    lat: "0.49197",
    lng: "101.419",
}, 
    
{
    country: "ID",
    name: "Rogojampi",
    lat: "-8.3129",
    lng: "114.28636",
}, 
    
{
    country: "ID",
    name: "Sabang",
    lat: "5.89066",
    lng: "95.3194",
},

{
    country: "ID",
    name: "Salatiga",
    lat: "-7.32963",
    lng: "110.496",
}, 
    
{
    country: "ID",
    name: "Samarinda",
    lat: "-0.49544",
    lng: "117.144",
}, 
    
{
    country: "ID",
    name: "Samosir",
    lat: "2.53886",
    lng: "98.6234",
}, 
    
{
    country: "ID",
    name: "Sampang",
    lat: "-7.18413",
    lng: "113.263",
}, 
    
{
    country: "ID",
    name: "Sarang",
    lat: "-6.72271",
    lng: "111.65298",
}, 
    
{
    country: "ID",
    name: "Sarangan",
    lat: "-7.67226",
    lng: "111.22648",
}, 
    
{
    country: "ID",
    name: "Sedayu, Bantul, Indonesia",
    lat: "-7.81642",
    lng: "110.2494",
}, 
    
{
    country: "ID",
    name: "Semarang",
    lat: "-6.98748",
    lng: "110.37",
},
    
{
    country: "ID",
    name: "Serang",
    lat: "-6.10525",
    lng: "106.147",
}, 
    
{
    country: "ID",
    name: "Sibolangit",
    lat: "3.31833",
    lng: "98.57589",
}, 
    
{
    country: "ID",
    name: "Sidoarjo",
    lat: "-7.46042",
    lng: "112.717",
}, 
    
{
    country: "ID",
    name: "Singaraja",
    lat: "-6.35005",
    lng: "108.361",
}, 
    
{
    country: "ID",
    name: "Singkawang",
    lat: "0.89569",
    lng: "109.038",
}, 
    
{
    country: "ID",
    name: "Singosari",
    lat: "-7.88799",
    lng: "112.67",
}, 
    
{
    country: "ID",
    name: "Situbondo",
    lat: "-7.77124",
    lng: "113.99715",
}, 
    
{
    country: "ID",
    name: "Sleman",
    lat: "-7.68978",
    lng: "110.343",
}, 
    
{
    country: "ID",
    name: "Sorong",
    lat: "-0.87209",
    lng: "131.249",
}, 
    
{
    country: "ID",
    name: "Sragen",
    lat: "-7.43216",
    lng: "111",
}, 
    
{
    country: "ID",
    name: "Subang",
    lat: "-6.55192",
    lng: "107.75",
}, 
    
{
    country: "ID",
    name: "Sugihwaras",
    lat: "-7.30556",
    lng: "111.97335",
}, 
    
{
    country: "ID",
    name: "Sukabumi",
    lat: "-6.90389",
    lng: "106.937",
}, 
    
{
    country: "ID",
    name: "Sukorejo",
    lat: "-7.70288",
    lng: "112.71211",
},
    
{
    country: "ID",
    name: "Sumbermanjing",
    lat: "-8.3355",
    lng: "112.68317",
}, 
    
{
    country: "ID",
    name: "Sumedang",
    lat: "-6.89191",
    lng: "108.047",
}, 
    
{
    country: "ID",
    name: "Sumenep",
    lat: "-7.00668",
    lng: "113.86",
}, 
    
{
    country: "ID",
    name: "Surabaya",
    lat: "-7.26309",
    lng: "112.731",
}, 
    
{
    country: "ID",
    name: "Surakarta",
    lat: "-7.55735",
    lng: "110.822",
}, 

{
    country: "ID",
    name: "Tabanan",
    lat: "-8.50602",
    lng: "115.134",
}, 
    
{
    country: "ID",
    name: "Tanjung Aru",
    lat: "4.09712",
    lng: "117.89383",
}, 
    
{
    country: "ID",
    name: "Tj Awarawar",
    lat: "-7.76742",
    lng: "114.22355",
},
    
{
    country: "ID",
    name: "Trawas",
    lat: "-7.64179",
    lng: "112.57877",
}, 
    
{
    country: "ID",
    name: "Trenggalek",
    lat: "-8.02394",
    lng: "111.707",
},
    
{
    country: "ID",
    name: "Trowulan",
    lat: "-7.53681",
    lng: "112.39404",
}, 
    
{
    country: "ID",
    name: "Tuban",
    lat: "-6.90069",
    lng: "112.049",
}, 
    
{
    country: "ID",
    name: "Tulungagung",
    lat: "-8.07314",
    lng: "111.903",
}, 
    
{
    country: "ID",
    name: "Tulungselapan",
    lat: "-3.17774",
    lng: "105.24867",
}, 
    
{
    country: "ID",
    name: "Tumpang",
    lat: "-8.00188",
    lng: "112.7344",
}, 
    
{
    country: "ID",
    name: "Ujung Indramayu",
    lat: "-8.61511",
    lng: "115.19662",
}, 
    
{
    country: "ID",
    name: "Ujung Indrapura",
    lat: "-7.22374",
    lng: "112.73831",
},
    
{
    country: "ID",
    name: "Ujung Krawang",
    lat: "4.36737",
    lng: "97.56741",
}, 
    
{
    country: "ID",
    name: "Ujungpandang",
    lat: "-5.14086",
    lng: "119.415",
}, 
    
{
    country: "ID",
    name: "Ungaran",
    lat: "-7.13534",
    lng: "110.419",
}, 
    
{
    country: "ID",
    name: "Wajak",
    lat: "-8.12777",
    lng: "112.726",
}, 
    
{
    country: "ID",
    name: "Wamena",
    lat: "-4.09812",
    lng: "138.916",
},
    
{
    country: "ID",
    name: "Wates",
    lat: "-7.89103",
    lng: "110.12",
}, 
    
{
    country: "ID",
    name: "Widodaren",
    lat: "-7.4071",
    lng: "111.234",
}, 
    
{
    country: "ID",
    name: "Winongan",
    lat: "-7.7419",
    lng: "112.947",
}, 
    
{
    country: "ID",
    name: "Wirosari",
    lat: "-7.08924",
    lng: "111.04",
}, 
    
{
    country: "ID",
    name: "Wlingi",
    lat: "-8.01579",
    lng: "112.384",
}, 
    
{
    country: "ID",
    name: "Wonocoyo",
    lat: "-8.24989",
    lng: "111.44",
}, 
    
{
    country: "ID",
    name: "Wonogiri",
    lat: "-7.81458",
    lng: "110.961",
}, 
    
{
    country: "ID",
    name: "Wonokromo",
    lat: "-7.30276",
    lng: "112.748",
}, 
    
{
    country: "ID",
    name: "Wonosari",
    lat: "-7.97942",
    lng: "110.582",
}, 
    
{
    country: "ID",
    name: "Wonosobo",
    lat: "-7.36914",
    lng: "109.927",
}, 
    
{
    country: "ID",
    name: "Yogyakarta",
    lat: "-7.80371",
    lng: "110.375",
}, 
    
{
    country: "ID",
    name: "Yosowilangun",
    lat: "-8.23293",
    lng: "113.275",
}];
