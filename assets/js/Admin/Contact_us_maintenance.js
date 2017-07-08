$(document).ready(function(){
	var proceed=false;
	$('.edit_website_name').click(function(){
		var new_contact = $("#contact_input").val();
		var new_type = $("#type").val();
		
		if(new_contact!=""&&new_type!="")
		{
			$.ajax({
			      url: '/Church/Admin/Contact_us_controller/contact_editor',
			      type: 'POST',
			      data: {
			      	'new_contact' 	   : new_contact,
			      	'new_type' : new_type
			      },
			      beforeSend: function(xhr){
			          Materialize.toast("Saving please wait ...", 3000 );
			      },
			      success: function(data){

			     	  Materialize.toast("New Contact has been added! Please wait ...", 3000 );
			     	  
			     	  setTimeout(function(){
						  location.reload("Contact_us_maintenance");
						}, 2000);
			      },
			      error: function(xhr, status, error) {
			          Materialize.toast("Something went wrong ... Please try again ", 3000 );
			      }
			 });

			
		}
		else
		{
			Materialize.toast("Please fill out the fields properly! please try again .", 3000 );
		}

		refresh_button();
	});


	$('#btn_save').click(function(){
		if(proceed==false)
		{
			$('#btn_save').html("<b>X</b> Cancel");
			$('#btn_save').addClass("red");
			$('#btn_proceed').removeClass('scale-out');
			$('#btn_proceed').addClass('scale-in');
			proceed=true;
		}
		else
		{
			refresh_button();
		}
	});

	function refresh_button()
	{
		$('#btn_save').html("<i class=\"fa fa-save\"></i> Save");
		$('#btn_save').removeClass("red");
		$('#btn_proceed').removeClass('scale-in');
		$('#btn_proceed').addClass('scale-out');
		proceed=false;
	}

});
	function remove_contact(cid)
	{
		$.ajax({
			      url: '/Church/Admin/Contact_us_controller/contact_remover',
			      type: 'POST',
			      data: {
			      	'cid' 	   : cid
			      },
			      beforeSend: function(xhr){
			          Materialize.toast("Removing please wait ...", 3000 );
			      },
			      success: function(data){

			     	  Materialize.toast("Contact has been removed! Please wait ...", 3000 );
			     	  setTimeout(function(){
						  location.reload("Contact_us_maintenance");
						}, 2000);
			      },
			      error: function(xhr, status, error) {
			          Materialize.toast("Something went wrong ... Please try again ", 3000 );
			      }
			 });
	}

