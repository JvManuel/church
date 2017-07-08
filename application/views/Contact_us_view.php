<html>
<body>
    
	<?php $this->load->view("parallax_view"); ?>

    <br>
    <center>
    		<h2>Contact us</h2>
    		<div class="row">
                <!-- Email -->
                <div class="col s11" style="text-align:left;margin-left:50px;">
                <h4>Email</h4>
                <?php 
                    foreach ($contact->result() as $row)
                    { 
                        if(strcmp($row->type,"Email")==0)
                        {
                ?>
    			    				<p style="margin-left:50px;"><b>&#8226;</b> <?php echo $row->contact; ?></p>
                <?
                        }
                    }
                ?>
                </div>
                <!-- Mobile -->
                <div class="col s11" style="text-align:left;margin-left:50px;">
                <h4>Mobile No.</h4>
                <?php 
                    foreach ($contact->result() as $row)
                    { 
                        if(strcmp($row->type,"Mobile No.")==0)
                        {
                ?>
                                    <p style="margin-left:50px;"><b>&#8226;</b> <?php echo $row->contact; ?></p>
                <?
                        }
                    }
                ?>
                </div>
                <!-- Tel -->
                <div class="col s11" style="text-align:left;margin-left:50px;">
                <h4>Tel No.</h4>
                <?php 
                    foreach ($contact->result() as $row)
                    { 
                        if(strcmp($row->type,"Tel No.")==0)
                        {
                ?>
                                    <p style="margin-left:50px;"><b>&#8226;</b> <?php echo $row->contact; ?></p>
                <?
                        }
                    }
                ?>
                </div>
    		</div>
    </center>
</body>
</html>