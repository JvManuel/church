<html>
	<body>
		<div class="row">
			<div class="col s3" >
				<?php $this->load->view("Menu"); ?>
			</div>
			<div class="col s9">
				<div class="col s12" style="margin-top:20px;">
					          <div class="card">
					            <div class="card-content">
					              <span class="card-title"><b>Contacts configuration</b></span>
						              <form>
						              		<div class="input-field col s12">
									          <input id="contact_input" type="text" class="validate" placeholder="Contact">
									          <label for="contact_input">Contact</label>
									        </div>
									        <div class="input-field col s12">
										        <select id="type" name="type">
										        	<option value="Email">Email</option>
										        	<option value="Mobile No.">Mobile No.</option>
										        	<option value="Tel No.">Tel No.</option>
										        </select>
									        	<label for="type">Contact Type</label>
									        </div>
									        <center>
									        	<a  class="waves-effect waves-light btn " id="btn_save" ><i class="fa fa-save"></i> Save</a>
							              		<a id="btn_proceed" class="waves-effect waves-light btn edit_website_name scale-transition scale-out" ><i class="fa fa-check"></i> Proceed</a>
							          	    </center>
						              </form>
					            </div>
					            
					          </div>

					          <div class="card">
					            <div class="card-content">
					              <span class="card-title"><b>Contact List</b></span>
						              <form>	
						              			<table class="highlight">
						              					<th style="background-color:#f2f2f2;">Contact</th>
						              					<th style="background-color:#f2f2f2;">Type</th>
						              					<th style="background-color:#f2f2f2;"></th>
								                <?php 
								                    foreach ($contact->result() as $row)
								                    { 
								                        
								                ?>
								                		 <tr>
								                         <td><?php echo $row->contact; ?></td>
								                         <td><?php echo $row->type; ?></td>
								                         <td><center><button type="button" onclick="remove_contact(<?php echo $row->cid; ?>);" class="waves-effect waves-light btn red"><b>X</b> Remove</button></center></td>
								                     	 </tr>
								                <?
								                        
								                    }
								                ?>
								            	</table>
						              </form>
					            </div>
					            
					          </div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="<?php echo base_url('assets/js/Admin/Contact_us_maintenance.js');?>"></script>
	</body>
</html>