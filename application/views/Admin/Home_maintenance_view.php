<html>
	<title>Home Maintenance | <?php echo $title; ?></title>
	<body>
		<div style="">
			<div class="row">
				<div class="col s3" >
					<?php $this->load->view("Menu"); ?>
				</div>
				<div class="col s9" >
					<div style="margin-top:20px;">
						<div class="row">
					        <div class="col s12">
					          <div class="card">
					            <div class="card-content">
					              <span class="card-title"><b>Home configuration</b></span>
						              <form>
						              		<div class="input-field col s12">
									          <input id="website_title_input" type="text" class="validate" value="<?php echo $title; ?>">
									          <label for="website_title_input">Website title</label>
									        </div>
									        <div class="input-field col s12">
									          <textarea id="introduction_input" type="text" class="validate materialize-textarea" ><?php echo $Introduction; ?></textarea>
									          <label for="introduction_input">Introduction</label>
									        </div>
									        <center>
									        	<a  class="waves-effect waves-light btn " id="btn_save" ><i class="fa fa-save"></i> Save</a>
							              		<a id="btn_proceed" class="waves-effect waves-light btn edit_website_name scale-transition scale-out" ><i class="fa fa-check"></i> Proceed</a>
							          	    </center>
						              </form>
					            </div>
					            
					          </div>
					        </div>
					      </div>
					</div>
					<div id="website_name_view" style="margin-top:50px;">
						
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="<?php echo base_url('assets/js/Admin/Home_maintenance.js');?>"></script>
	</body>
</html>