// //-------------------------------------------
// //-------------------------------------------
// // SAVE / INSERT HISTORY TO DATABASE
// //-------------------------------------------

// $("#history_saves").click(function()
// {

// 	if(!$('#history_date').val() && 
// 	   !$('#history_problem').val() && 
// 	   !$('#history_solution').val() &&
// 	   !$('#history_remarks').val() &&
// 	   !$('#history_problem').val())
// 	{
// 		$('#snacker_message').html('Please Fill All Required Fields!');
// 		message();
// 	}
// 	else
// 	{
// 		itemid = $('#history_itemid').val();
// 		datesrf = $('#history_date').val();
// 		srf = $('#history_srf').val();
// 		problem = $('#history_problem').val();
// 		solution = $('#history_solution').val();
// 		remarks = $('#history_remarks').val();
// 		checked = $('#history_checkedby').val();

// 		$.ajax(
// 			{
// 				url: "../config/history/save/save-history.php",
// 				method: "POST",
// 				data: {'datesrf':datesrf,'srf':srf,'problem':problem,'solution':solution,'remarks':remarks,
// 				'checked':checked, 'itemid':itemid},
// 				success:function(data){
// 					$('#snacker_message').html('Successfully Added!');
// 					message();
// 				}  
// 			});
// 	}
// });


// //-------------------------------------------
// //-------------------------------------------
// // PRINT / CONVERT HISTORY RECORD TO PDF
// //-------------------------------------------

// $(document).on('click','#history_print',function()
// {

// 	itemid = $('#history_itemid').val();
//     $('<form action="../class/history_report.php" target="_blank" method="post"> <input type"hidden" name="itemid" value="'+itemid+'"> </form>').appendTo('body').submit().remove();
// });


// //-------------------------------------------
// //-------------------------------------------
// //DISPLAY DATA ON THE MODEL WHEN CLICKED
// //-------------------------------------------

// $(document).on('click','#item_addon_history',function(){
// 	$('#history_itemid').val($(this).data('itemid'));
// 	$('#addon_display_addon_type').html($(this).data('addontype'));
// 	$('#addon_display_code').html($(this).data('code'));
// 	$('#addon_display_brand').html($(this).data('brand'));
// 	$('#addon_display_model').html($(this).data('model'));
// 	$('#addon_display_sn').html($(this).data('sn'));
// 	$('#addon_display_status').html($(this).data('status'));
// 	$('#addon_display_supplier').html($(this).data('supplier'));
// 	$('#addon_display_amount').html('&#8369; '+$(this).data('amount'));
// 	$('#addon_display_invoice').html($(this).data('invoice'));
// 	$('#addon_display_rf').html($(this).data('rf'));
// 	$('#addon_display_ponum').html($(this).data('ponum'));
// 	$('#addon_display_podate').html($(this).data('podate'));
// 	$('#addon_display_receivedate').html($(this).data('receivedate'));
// 	$('#addon_display_warranty').html($(this).data('warranty'));
// 	$('#addon_display_location').html($(this).data('location'));
// });

