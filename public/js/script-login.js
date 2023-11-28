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