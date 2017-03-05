<html>

<title><?php echo str_replace("_"," ",$Page_Name); ?> | <?php echo $title; ?>
</title>
<head>
<!--My Css-->
<link href="<?php echo base_url('assets/css/default.css');?>" rel="stylesheet" media="screen" >
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!--My Javascripts-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/default.js');?>"></script>
</head>
<div class="navbar-fixed">
	  <nav>
	    <div class="nav-wrapper">
	      <a href="#!" class="brand-logo left" style="margin-left:30px;"><?php echo $title; ?></a>
	      <ul class="right hide-on-med-and-down">
	        <li id="Home"><a href="Home"><i class="fa fa-home"></i> HOME</a></li>
	        <li id="Learn_more"><a href="Learn_more"><i class="fa fa-info-circle"></i> LEARN MORE</a></li>
	        <li id="Upcoming_events"><a href="Upcoming_events"><i class="fa fa-list-alt"></i> UPCOMING EVENTS</a></li>
	        <li id="Contact_us"><a href="Contact_us"><i class="fa fa-phone"></i> CONTACT US</a></li>
	        <?php if(isset($_SESSION['logged_in'])==FALSE) {
	        	?>
	        <li id="Log_in"><a href="Log_in"><i class="fa fa-sign-in"></i> LOG IN</a></li>
	        <?php } 
	        else
	        {
	        ?>
	        <li id="Admin"><a href="Admin"><i class="fa fa-user"></i> ADMIN</a></li>
	        <li id="Log_out"><a href="Log_out"><i class="fa fa-sign-out"></i> LOG OUT</a></li>
	        <?php } ?>
	      </ul>
	    </div>
	  </nav>
 </div>
<input type="hidden" id="Page_Name" value="<?php echo $Page_Name; ?>" style="display:none;" readonly/>
</html>

<script>
	$('#'+$('#Page_Name').val()).addClass("active");
</script>