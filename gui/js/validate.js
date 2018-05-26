$(document).ready(function(){
	
	var checkFields = function(){
		
		var id = $(this).attr("id");
		var valueofInput = $(this).val();
		var trimmedInputValue = valueofInput.trim();
		
		if (trimmedInputValue != "")
		{
			$("#" + id + "Error").empty();
		}
		else
		{
			$("#" + id + "Error").text("* Obavezno polje!");
		}
	}
	allInputs = $("input");
	$(allInputs).blur(checkFields);
	$("form").submit(checkFields);
	
});