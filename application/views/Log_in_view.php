
<body>
		
		<center>
		<div class='LoginForm' >
				<div class='row'>
					<form style='padding:50 10 10 10;'>
							<h2 align='center'>Log In</h2>
							<div class="input-field col s12">
									<input  type='text' maxlength='25' id='uname' name='uname' class='validate' />
									<label for="uname">Username</label>
							</div>

							<div class="input-field col s12">
									<input type='password' maxlength='25' id='pword' name='pword' class='validate' />
									<label  for="pword">Password</label>
							</div>

							<center>
									<button type='button' id='btnLogin' name='btnLogin' class="waves-effect waves-light btn" ><i class="material-icons left">lock</i>Log In</button>
							</center>
							<br>
							<center>
								<h6 id='Notify' align='center' style='color:red;'></h6>
								<div  id='progress_login' style='width:50%;display:none;'>
									<div class="progress">
								      <div class="indeterminate"></div>
								  	</div>
								</div>
							</center>	
					</form>
				</div>
		</div>

		<br>
		<br>
		<br>
	</center>
	<script type="text/javascript" src="<?php echo base_url('assets/js/Log_in.js');?>"></script>
</body>
</html>
