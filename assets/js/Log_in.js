
$(document).ready(function(){
	$('#btnLogin').click(function(){
		var uname = $('#uname').val();
		var pword = $('#pword').val();

		if(uname!=""&&pword!="")
		{
		  $.ajax({
		    url  : '/Church/Log_in/Log_in_function',
		    type : 'POST',
		    data : {
		    	'uname' : uname,
		    	'pword'	: pword
		    },
		    beforeSend : function(xhr){
		      	
		    },
		    success : function(data){
		    	  
		    	  if(data!='Wrong username or password ! Please try again !')
		    	  {
		    	  	  $('#Notify').css('cssText','color:green;');	    	  	  
			    	  $('#Notify').html("Logging in please wait ...").fadeIn("fast");
			    	  $('#progress_login').fadeIn("slow");
			    	  setTimeout(function(){
			            $('#Notify').fadeOut("slow");
			            $('#progress_login').fadeOut("slow");
			            window.location.href=data;

			          },2000);
			          

		    	  }
		    	  else
		    	  {	  
		    	  	   $('#Notify').css('cssText','color:red;');  	  	   
		    	  	   $('#Notify').html(data).fadeIn("fast");
			    	  setTimeout(function(){
			            $('#Notify').fadeOut("slow");
			          },3000);
		    	  }
		    }
		  })
		}
		else
		{
					$('#Notify').css('cssText','color:red;');
					$('#Notify').html("Please fill all the fields!").fadeIn("fast");
		    	  setTimeout(function(){
		            $('#Notify').fadeOut("slow");
		          },2000);
		}
		
	});
});