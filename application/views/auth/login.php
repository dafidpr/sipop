	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
		  <div class="x_content">
			<section class="login_content">
			  <h2><img src="<?php echo base_url('assets/img/wifi.png')?>" width="40"> <?php echo $title?></h2>
			  <?php echo $this->session->flashdata('message'); ?>
				<form action="<?php echo base_url('auth')?>" method="post">
				  <div>
					<input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off">
					<?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
				  </div>
				  <div>
					<input type="password" class="form-control" name="password" placeholder="Password">
					<?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
				  </div>
				  <div class="form-group ">
				  	<?php echo $captcha?>
				  </div>
				  <div class="form-group">
					<button class="btn btn-success btn-block" type="submit"><i class="fa fa-unlock"></i> Log in</button>
				  </div>
				  <div class="clearfix"></div>
				  <div class="separator">
				  </div>
				</form>
			  </section>
		  </div>
		</div>
	  </div>