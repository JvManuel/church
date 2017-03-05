$(document).ready(function(){
	var proceed=false;
	$('.edit_website_name').click(function(){
		var new_title = $("#website_title_input").val();
		var new_introduction = $("#introduction_input").val();
		if(new_title!=""&&new_introduction!="")
		{
			$.ajax({
			      url: '/Church/Admin/Home_maintenance_controller/website_title_editor',
			      type: 'POST',
			      data: {
			      	'new_title' 	   : new_title,
			      	'new_introduction' : new_introduction
			      },
			      beforeSend: function(xhr){
			          Materialize.toast("Saving please wait ...", 3000 );
			      },
			      success: function(data){
			     	  Materialize.toast("Title has been modified . Please refresh the page to see changes .", 3000 );
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

