//----------------------------------
// MULTIPLE SELECTTION OF ASSETS
//---------------------------------

$('#non_consumable_tables tbody').on( 'click', 'tr', function () {
    $(this).toggleClass('selected');
    var pos = non_consumable_tables.row(this).index();
    var row = non_consumable_tables.row(pos).data();
    console.log(row);
} );



//----------------------------------
// SAVE MULTIPLE ASSETS TO ONE USER
//---------------------------------

$("#save_deployment").on("click",function(){
     var ids =[];
     var fname = $('#user_fname').val();
     var lname = $('#user_lname').val();
     var location = $('#user_location').val();
     var company = $('#user_company').val();
 
 $('#non_consumable_tables tbody tr.selected').each(function(){
     var pos = non_consumable_tables.row(this).index();
     var row = non_consumable_tables.row(pos).data()[0];
     ids.push(row);
 });

  if (ids == "" || !$('#user_fname').val() || !$('#user_lname').val() || !$('#user_location').val() || $('#user_company').val() == "") {
     $('#snacker_message').html('Please Input user Details or Select Assets');
	 message();
  }
  else{

	  $.ajax({

	    url: '../config/deployment/save-deployment.php',
	    method: "POST",
	    data: {'ids':ids, 'lname':lname, 'fname':fname, 'location':location, 'company':company},
	    success: function(data){
	       $('#snacker_message').html('Succesfully Assigned!');
		   message();
	 }
	 });
}

});
