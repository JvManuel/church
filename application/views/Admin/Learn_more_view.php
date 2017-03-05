<html>
	<title>Learn More Maintenance | <?php echo $title; ?></title>
	<body>
		<div style="">
			<div class="row">
				<div class="col s3" >
					<?php $this->load->view("Menu"); ?>
				</div>
				<div class="col s9" >
					<div style="margin-top:20px;">
						<div class="col s12">
					          <div class="card">
						            <div class="card-content">
						              <span class="card-title"><b>Learn more configuration</b></span>
							              <form>
							              		<div class="input-field col s12">
										          <textarea id="about_us_input" type="text" class="validate materialize-textarea" ><?php echo $About_Us; ?></textarea>
										          <label for="about_us_input">About us</label>
										        </div>
										        <div class="input-field col s12">
										          <textarea id="mission_input" type="text" class="validate materialize-textarea" ><?php echo $Mission; ?></textarea>
										          <label for="mission_input">Mission</label>
										        </div>
										        <div class="input-field col s12">
										          <textarea id="vision_input" type="text" class="validate materialize-textarea" ><?php echo $Vision; ?></textarea>
										          <label for="vision_input">Vision</label>
										        </div>
										        <div class="input-field col s12">
										          <textarea id="location_input" type="text" class="validate materialize-textarea" ><?php echo $Location; ?></textarea>
										          <label for="location_input">Location</label>
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
			</div>
		</div>
		<script type="text/javascript" src="<?php echo base_url('assets/js/Admin/Learn_more_maintenance.js');?>"></script>
	</body>
</html>