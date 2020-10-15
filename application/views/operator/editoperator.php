 <div class="modal fade" id="editOperator">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">

		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
		  </button>
		  <h4 class="modal-title" id="editOperator">Edit Data Operator</h4>
		</div>
		<div class="modal-body">
		 <form class="form-horizontal" method="post" action="<?php echo base_url('operator/editoperator')?>">
			  <div class="form-group">
			  <input type="hidden" id="editidop" class="form-control" name="editidop" required />
				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="nama">Nama Operator :</label>
                      <input type="text" id="editnama" class="form-control" name="editnama" required />
				  </div>
				  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="alamat">Alamat :</label>
                      <input type="text" id="editalamat" class="form-control" name="editalamat" required />
				  </div>
			  </div>
			   <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="kelurahan">Kelurahan / Desa :</label>
                      <input type="text" id="editkelurahan" class="form-control" name="editkelurahan" required />
				  </div>
				  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="kecamatan">Kecamatan :</label>
                      <input type="text" id="editkecamatan" class="form-control" name="editkecamatan" required />
				  </div>
			  </div>
			   <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="kabupaten">Kabupaten :</label>
                      <input type="text" id="editkabupaten" class="form-control" name="editkabupaten" required />
				  </div>
				  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="kodepos">Kode POS :</label>
                      <input type="text" id="editkodepos" class="form-control" name="editkodepos" required />
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