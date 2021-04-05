//----------------------------------
// VALIDATION OF WHAT TYPE OF ASSET
//---------------------------------

$('#desktop_components').hide();
$('#desktop_componentsTab').hide();
$('#equipment_code').attr('disabled', true);
$("#item_type").change(function(){
		
	code = $(this).val();

	if (code != "DC" && code != "LC") {
		$('#desktop_components').hide();
		$('#desktop_componentsTab').hide();
		$('#processor').val('N/A');		
		document.getElementById("os").disabled = true;
		document.getElementById("processor").disabled = true;
		document.getElementById("os").selectedIndex = "3";
	}
	
	else{
		$('#desktop_components').show();
		$('#desktop_componentsTab').show();
		$('#processor').val('');
		document.getElementById("processor").disabled = false;	
		document.getElementById("os").disabled = false;
		document.getElementById("os").selectedIndex = "0";
	}

	$.ajax({
	    url: "../config/item/validate/validate-equipement-code.php",
	    method: "POST",
	    dataType: "JSON",
	    data: {'code':code},
	    success:function(data){
	         str = "" + data
		     pad = "000000"
		     ans = pad.substring(0, pad.length - str.length) + str
	    	$('#equipment_code').val("ICT-"+code+"-"+ans);
	    }  
	});

});



//----------------------------------
// REMOVE DISABLED FORM
//---------------------------------

$("#add_item_form").submit(function(){
	$('#equipment_code').attr('disabled', false);
	$('#os').attr('disabled', false);
	$('#processor').attr('disabled', false);
});


