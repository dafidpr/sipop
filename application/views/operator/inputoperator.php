 <div class="modal fade" id="inputOperator">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">

		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
		  </button>
		  <h4 class="modal-title" id="inputOperator">Entry Data Operator</h4>
		</div>
		<div class="modal-body">
		 <form class="form-horizontal" method="post" action="<?php echo base_url('operator/inputoperator')?>">
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="nama">Nama Operator :</label>
                      <input type="text" id="nama" class="form-control" name="nama" required />
				  </div>
				  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="alamat">Alamat :</label>
                      <input type="text" id="alamat" class="form-control" name="alamat" required />
				  </div>
			  </div>
			   <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="kelurahan">Kelurahan / Desa :</label>
                      <input type="text" id="kelurahan" class="form-control" name="kelurahan" required />
				  </div>
				  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="kecamatan">Kecamatan :</label>
                      <input type="text" id="kecamatan" class="form-control" name="kecamatan" required />
				  </div>
			  </div>
			   <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="kabupaten">Kabupaten :</label>
                      <input type="text" id="kabupaten" class="form-control" name="kabupaten" required />
				  </div>
				  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="kodepos">Kode POS :</label>
                      <input type="text" id="kodepos" class="form-control" name="kodepos" required />
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