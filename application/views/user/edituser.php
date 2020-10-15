 <div class="modal fade" id="editUserModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">

		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
		  </button>
		  <h4 class="modal-title" id="editUserModal">EntEditry Data User</h4>
		</div>
		<div class="modal-body">
		 <form class="form-horizontal" method="post" action="<?php echo base_url('user/edituser')?>">
			  <div class="form-group">
			  <input type="text" class="form-control has-feedback-left" id="iduser" name="iduser">
				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<input type="text" class="form-control has-feedback-left" id="editusername" name="editusername" placeholder="Username">
					<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
				  </div>
				  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<input type="text" class="form-control has-feedback-left" id="editnama" name="editnama" placeholder="Nama Lengkap">
					<span class="fa fa-male form-control-feedback left" aria-hidden="true"></span>
				  </div>
			  </div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<input type="text" class="form-control" id="edittelp" name="edittelp" placeholder="Phone">
					<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<input type="text" class="form-control has-feedback-left" id="editemail" name="editemail" placeholder="Email">
					<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
				  </div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Tipe User</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
				   <select id="edittipe" name="edittipe" class="form-control" required>
					  <option value=""></option>
					   <option value="Administrator">Administrator</option>
					   <option value="Manajemen">Manajemen</option>
				  </select>
				</div>
			  </div>
			   <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
				  <textarea col="7" rows="2" class="form-control" name="editalamat" id="editalamat"></textarea>
				</div>
			  </div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  <button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		  </form>
		</div>
	  </div>
	</div>
  </div>