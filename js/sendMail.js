function valid(){
var phone = $("#phone").val();

	if(phone.length < 17){
		$('#sendMail').attr('disabled', 'disabled');
	} else $('#sendMail').removeAttr('disabled');
	
};
            function ne5 () {
              document.getElementById('jb5').hidden = true;
              document.getElementById('jb6').hidden = false;
            };

$("#sendMail").on("click", function(){
	var color = $("#inputColor").val();
	var size = $("#inputSize").val();
	var decor = $("#inputDecor").val();
	var bag = $("#inputBag").val();
	var phone = $("#phone").val();

	$.ajax({
		url: 'ajax/mail.php',
		type: 'POST',
		cache: false,
		data: {'color':color, 'size':size, 'decor':decor, 'bag':bag, 'phone':phone},
		dataType: 'html',
		beforeSend: function() {
			$("#sendMail").prop("disabled", true);
		},
		success: function(data) {
			if (!data) {
				alert("Внимание! Возникла ошибка, заказ не отправлен.");
			} else {
				ne5();
				$("#mailform").trigger("reset");
			}
			$("#sendMail").prop("disabled", false);

		}

	});

});