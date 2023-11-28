$(document).ready(function() {
	// Menggunakan event delegation untuk menangani klik pada elemen dengan class "button"
	$(document).on('click', '.button', function() {
	  var dataValue = $(this).data('value');
	  var dataorder = String($(this).data('order'));
	  showbuy(dataValue,dataorder); // Mengirim dataValue sebagai argumen ke showbuy
	});

	$(document).on('click', '.buttondesc', function() {
		var buttondesc = $(this).data('value');
		showpesan(buttondesc)
	  });

	 $('[id*="desc"]').addClass('d-none');
  });

  function showbuy(dataValue,dataorder){
	// alert(idval);
	var orderbefore = $('#flexcol'+dataValue).css("order");
	$('#'+dataValue).toggleClass('d-none');
	$('#flexcol'+dataValue).toggleClass('col-md-4');
	$('#desc'+dataValue).toggleClass("d-none");
	if(orderbefore === dataorder) {
	 	$('#flexcol'+dataValue).css("order" , "1");
	} else {
		$('#flexcol'+dataValue).css("order" , dataorder);

	}
	console.log(dataorder, orderbefore);
};

function showpesan(buttondesc){
	$('#desc'+buttondesc).toggleClass("d-none");
	$('#form'+buttondesc).toggleClass('d-none');
};
  



