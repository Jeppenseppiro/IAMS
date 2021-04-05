//-------------------------------------------
//-------------------------------------------
// SAVE / INSERT HISTORY TO DATABASE
//-------------------------------------------

$("#history_save").click(function()
{
	$('#history_save').prop('disabled', true);
	if(!$('#history_date').val() && 
	   !$('#history_problem').val() && 
	   !$('#history_solution').val() &&
	   !$('#history_remarks').val() &&
	   !$('#history_problem').val())
	{
		$('#snacker_message').html('Please Fill All Required Fields!');
		message();
	}
	else
	{
		itemid = $('#history_itemid').val();
		datesrf = $('#history_date').val();
		srf = $('#history_srf').val();
		problem = $('#history_problem').val();
		solution = $('#history_solution').val();
		remarks = $('#history_remarks').val();

		$.ajax(
			{
				url: "../config/history/save/save-history.php",
				method: "POST",
				data: {'datesrf':datesrf,'srf':srf,'problem':problem,'solution':solution,'remarks':remarks, 'itemid':itemid},
				success:function(data){
					$('#snacker_message').html('Successfully Added!');
					message();
				}  
			});
	}
});


//-------------------------------------------
//-------------------------------------------
// PRINT / CONVERT HISTORY RECORD TO PDF
//-------------------------------------------

$(document).on('click','#history_print',function()
{
	itemid = $('#history_itemid').val();
    $('<form action="../class/history_report.php" target="_blank" method="post"> <input type"hidden" name="itemid" value="'+itemid+'"> </form>').appendTo('body').submit().remove();
});


//-------------------------------------------
//-------------------------------------------
//DISPLAY DATA ON THE MODEL WHEN CLICKED
//-------------------------------------------

$(document).on('click','#item_history',function()
{
	$('#history_itemid').val($(this).data('itemid'));
	$('#display_item_type').html($(this).data('itemtype'));
	$('#display_code').html($(this).data('code'));
	$('#display_brand').html($(this).data('brand'));
	$('#display_model').html($(this).data('model'));
	$('#display_sn').html($(this).data('sn'));
	$('#display_status').html($(this).data('status'));
	$('#display_supplier').html($(this).data('supplier'));
	$('#display_amount').html('&#8369; '+$(this).data('amount'));
	$('#display_invoice').html($(this).data('invoice'));
	$('#display_rf').html($(this).data('rf'));
	$('#display_ponum').html($(this).data('ponum'));
	$('#display_podate').html($(this).data('podate'));
	$('#display_receivedate').html($(this).data('receivedate'));
	$('#display_warranty').html($(this).data('warranty'));
	$('#display_location').html($(this).data('location'));
});

