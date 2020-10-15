 <div class="modal fade" id="inputRouterModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
		  </button>
		  <h4 class="modal-title" id="inputRouterModal">Entry Data Router</h4>
		</div>
		<div class="modal-body">
		 <form class="form-horizontal" method="post" action="<?php echo base_url('router/inputrouter')?>">
			  <div class="form-group">
			  <input type="hidden" class="form-control" name="iduserlevel" id="iduserlevel" value="<?php echo $user['ID_USER']?>">
				<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Nama BTS/POP :</label>
					   <select id="namabts" onchange="infoRouter()" name="namabts" class="form-control" required>
						  <option value=""></option>
						  <?php foreach($btspop as $b) {?>
						  <option value="<?php echo $b['ID_BTS']?>"><?php echo $b['NAMA_BTS']?></option>
						  <?php }?>
					  </select>
				  </div>
				  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Latitude :</label>
                      <input type="text" id="lat" class="form-control" name="lat" required readonly />
				  </div>
				  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Longitude :</label>
                      <input type="text" id="long" class="form-control" name="long" required readonly />
				  </div>
			  </div>
			 <div class="form-group">
				 <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Lokasi :</label>
                      <input type="text" id="lokasirouter" class="form-control" name="lokasi" required readonly />
				  </div>
				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Identitas Router :</label>
                      <input type="text" id="identitas" class="form-control" name="identitas" required />
				  </div>
			  </div>
			   <div class="form-group">
			   <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">IP Address Router :</label>
                      <input type="text" id="iprouter" class="form-control" name="iprouter" required />
				  </div>
				 <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Mac Address Router :</label>
                      <input type="text" id="macrouter" class="form-control" name="macrouter" required />
				  </div>
				<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Produk Router :</label>
					   <select id="produkrouter" name="produkrouter" class="form-control" required>
						  <option value=""></option>
						  <option value="Mikrotik">Mikrotik</option>
						  <option value="Cisco">Cisco</option>
						  <option value="Juniper">Juniper</option>
						  <option value="Debian">Debian</option>
						  <option value="Ubuntu">Ubuntu</option>
						  <option value="Huawei">Huawei</option>
						  <option value="Other">Other</option>
					  </select>
				  </div>
			  </div>
			  <div class="form-group">
			  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Nama Produk Router :</label>
                      <input type="text" id="namarouter" class="form-control" name="namarouter" required />
				  </div>
				  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Operator :</label>
					   <select id="operator" name="operator" class="form-control" required>
						  <option value=""></option>
						  <?php foreach($operator as $o){?>
						  <option value="<?php echo $o['ID_OPERATOR']?>"><?php echo $o['NAMA_OPERATOR']?></option>
						  <?php }?>
					  </select>
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