		 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?php echo $title?></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  <?php echo $this->session->flashdata('message'); ?>
					 <form class="form-horizontal" method="post" action="<?php echo base_url('user/ubahpassword')?>">
						  <div class="form-group">
							<div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="password" class="form-control has-feedback-left" id="curent" name="curent" placeholder="Curent Password">
								<span class="fa fa-unlock form-control-feedback left" aria-hidden="true"></span>
								<?php echo form_error('curent', '<small class="text-danger pl-3">', '</small>'); ?>
							  </div>
						  </div>
						   <div class="form-group">
							<div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="password" class="form-control has-feedback-left" id="new" name="new" placeholder="New Password">
								<span class="fa fa-unlock form-control-feedback left" aria-hidden="true"></span>
								<?php echo form_error('new', '<small class="text-danger pl-3">', '</small>'); ?>
							  </div>
						  </div>
						    <div class="form-group">
							<div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="password" class="form-control has-feedback-left" id="repeat" name="repeat" placeholder="Confirm Password">
								<span class="fa fa-unlock form-control-feedback left" aria-hidden="true"></span>
								<?php echo form_error('repeat', '<small class="text-danger pl-3">', '</small>'); ?>
							  </div>
						  </div>
						   <div class="form-group">
							<div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
								<button type="submit" class="btn btn-primary btn-block" title="Simpan Data">Simpan</button>
							  </div>
						  </div>
					  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<?php include 'Js.php'?>