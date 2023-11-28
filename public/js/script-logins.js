$(".info-item .btn").click(function(){
    $(".container").toggleClass("log-in");
  });
$(".container-form .btn").click(function(){
    setTimeout(function(){
        $(".container").addClass("active");
    },250);
});
$(document).ready(function () {
    var urlParams = new URLSearchParams(window.location.search);

    // Mengecek apakah ada parameter 'login' dengan nilai true
    if (urlParams.has('login') && urlParams.get('login') === 'true') {
        $(".container").removeClass("log-in");
    } else {
        $(".container").addClass("log-in");
    }
});

$(".btn-back").click(function () {
    window.location.href = "index.php";
});