$(document).ready(function(){
	var proceed=false;
	$('.edit_website_name').click(function(){
		var new_about_us = $("#about_us_input").val();
		var new_mission  = $("#mission_input").val();
		var new_vision 	 = $("#vision_input").val();
		var new_location = $("#location_input").val();
		if(new_about_us!="")
		{
			$.ajax({
			      url: '/Church/Admin/Learn_more_controller/learn_more_editor',
			      type: 'POST',
			      data: {
			      	'new_about_us' 	   : new_about_us,
			      	'new_mission'	   : new_mission,
			      	'new_vision'	   : new_vision,
			      	'new_location'	   : new_location
			      },
			      beforeSend: function(xhr){
			          Materialize.toast("Saving please wait ...", 3000 );
			      },
			      success: function(data){
			     	  Materialize.toast("Learn more information has been modified .", 3000 );
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

