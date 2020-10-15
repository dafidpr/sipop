 <div class="modal fade" id="inputPenggunaPop">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
		  </button>
		  <h4 class="modal-title" id="inputPenggunaPop">Entry Data Pengguna POP</h4>
		</div>
		<div class="modal-body">
		 <form class="form-horizontal" method="post" action="<?php echo base_url('penggunabts/inputpop')?>">
			  <div class="form-group">
				<input type="hidden" class="form-control" name="idloginpop" id="idloginpop" value="<?php echo $user['ID_USER']?>">
				<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Nama BTS/POP :</label>
					   <select id="namabtspop" onchange="infoBts()" name="namabtspop" class="form-control" required>
						  <option value=""></option>
						  <?php foreach($pengguna as $p) {?>
						  <option value="<?php echo $p['ID_BTS']?>"><?php echo $p['NAMA_BTS']?></option>
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
				<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
				   <label for="">Lokasi :</label>
					<input type="text" id="lokasibts" class="form-control" name="lokasibts" required readonly />
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">SSID :</label>
                      <input type="text" id="ssid" class="form-control" name="ssid" required />
				  </div>
				<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Change Width :</label>
					   <select id="width" name="width" class="form-control" required>
						  <option value=""></option>
						  <option value="20 MHz">20 MHz</option>
						  <option value="40 MHz">40 MHz</option>
						  <option value="20 / 40 MHz">20 / 40 MHz</option>
						  <option value="80 MHz">80 MHz</option>
					  </select>
				  </div>
				</div>
				<div class="form-group">
				<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Mode :</label>
					<select id="mode" name="mode" class="form-control" required>
						<option value=""></option>
						<option value="Access Point">Access Point</option>
						<option value="Station">Station</option>
					</select>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Band :</label>
					   <select id="band" name="band" class="form-control" required>
						  <option value=""></option>
						  <option value="2 GHz">2 GHz</option>
						  <option value="5 GHz">5 GHz</option>
					  </select>
				  </div>
				  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Security :</label>
					   <select id="security" name="security" class="form-control" required>
						  <option value=""></option>
						  <option value="WPA PSK">WPA PSK</option>
						  <option value="WPA PSK 2">WPA PSK 2</option>
					  </select>
				  </div>
				</div>
				<div class="form-group">
					<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Kode Security :</label>
						<input type="text" id="kodesecurity" class="form-control" name="kodesecurity" required />
					</div>
				<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Produk :</label>
					   <select id="produk" name="produk" class="form-control" required>
						  <option value=""></option>
						  <option value="Ubiquity">Ubiquity</option>
						  <option value="Mikrotik">Mikrotik</option>
						  <option value="TP Link">TP Link</option>
						  <option value="Tenda">Tenda</option>
						  <option value="Other">Other</option>
					  </select>
				  </div>
				  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Nama Produk :</label>
                      <input type="text" id="namaproduk" class="form-control" name="namaproduk" required />
				  </div>
			  </div>
			   <div class="form-group">
				   <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					 <label for="">Mac Address:</label>
					   <input type="text" id="mac" class="form-control" name="mac" required />
				   </div>
			    <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">IP Address :</label>
                      <input type="text" id="ip" class="form-control" name="ip" required />
				  </div>
				<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
					<label for="">Operator :</label>
					   <select id="operatorpop" name="operatorpop" class="form-control" required>
						  <option value=""></option>
						  <?php foreach($operator as $o) {?>
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