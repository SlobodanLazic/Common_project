$(document).ready(function(){
	
	var checkFields = function(){
		
		var id = $(this).attr("id");
		var valueofInput = $(this).val();
		var trimmedInputValue = valueofInput.trim();
		
		if (trimmedInputValue != "" && trimmedInputValue.length >= 5)
		{
			$("#" + id + "Error").empty();
		}
		else
		{
			$("#" + id + "Error").text("* Obavezno polje!");
		}
	}
	
	var allInputs = $("input");
	$(allInputs).blur(checkFields);
	$("form").submit(checkFields);
});


