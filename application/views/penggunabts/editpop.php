		 <?php //cek_user()?>
		 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?php echo $title?></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
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
                     <form class="form-horizontal" method="post" action="<?php echo base_url('penggunabts/editpop')?>">
						  <div class="form-group">
							<input type="hidden" class="form-control" name="id_pengguna_pop" id="id_pengguna_pop" value="<?php echo $detil['ID_PENGGUNA_POP']?>">
							<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">Nama BTS/POP :</label>
								   <select id="namabtspop" onchange="infoBts()" name="namabtspop" class="form-control" required>
									  <option value=""></option>
									  <?php foreach($pengguna as $p) {?>
									  <?php if($p['ID_BTS'] == $detil['ID_BTS']):?>
									  <option value="<?php echo $p['ID_BTS']?>" selected><?php echo $p['NAMA_BTS']?></option>
									  <?php else:?>
									  <option value="<?php echo $p['ID_BTS']?>"><?php echo $p['NAMA_BTS']?></option>
									  <?php endif;?>
									  <?php }?>
								  </select>
							  </div>
							  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">Latitude :</label>
								  <input type="text" id="lat" class="form-control" name="lat" value="<?php echo $detil['LAT_BTS']?>" required readonly />
							  </div>
							  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">Longitude :</label>
								  <input type="text" id="long" class="form-control" name="long" value="<?php echo $detil['LONG_BTS']?>" required readonly />
							  </div>
						  </div>
						 <div class="form-group">
						 <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">Lokasi :</label>
								  <input type="text" id="lokasibts" class="form-control" name="lokasibts" value="<?php echo $detil['LOKASI_BTS']?>" required readonly />
							  </div>
							<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">SSID :</label>
								  <input type="text" id="ssid" class="form-control" name="ssid" value="<?php echo $detil['SSID']?>" required />
							  </div>
							<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">Change Width :</label>
								   <select id="width" name="width" class="form-control" required>
									  <option value=""></option>
									  <?php foreach($width as $w):?>
									  <?php if($w == $detil['WIDTH']):?>
									   <option value="<?php echo $w?>" selected><?php echo $w?></option>
									  <?php else:?>
									   <option value="<?php echo $w?>"><?php echo $w?></option>
									  <?php endif;?>
									  <?php endforeach;?>
								  </select>
							  </div>
						  </div>
						   <div class="form-group">
						   <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">Mode :</label>
								   <select id="mode" name="mode" class="form-control" required>
									  <option value=""></option>
										<?php foreach($mode as $mode):?>
										<?php if($mode == $detil['MODE']):?>
										<option value="<?php echo $mode?>" selected><?php echo $mode?></option>
										<?php else:?>
										<option value="<?php echo $mode?>"><?php echo $mode?></option>
										<?php endif;?>
										<?php endforeach;?>
								  </select>
							  </div>
							<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">Band :</label>
								   <select id="band" name="band" class="form-control" required>
									  <option value=""></option>
									  <?php foreach($band as $band):?>
									  <?php if($band == $detil['BAND']):?>
									  <option value="<?php echo $band?>" selected><?php echo $band?></option>
									  <?php else:?>
									  <option value="<?php echo $band?>"><?php echo $band?></option>
									  <?php endif;?>
									  <?php endforeach;?>
								  </select>
							  </div>
							  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">Security :</label>
								   <select id="security" name="security" class="form-control" required>
									  <option value=""></option>
									  <?php foreach($security as $security):?>
									  <?php if($security == $detil['SECURITY']):?>
									  <option value="<?php echo $security?>" selected><?php echo $security?></option>
									  <?php else:?>
									  <option value="<?php echo $security?>"><?php echo $security?></option>
									  <?php endif;?>
									  <?php endforeach;?>
								  </select>
							  </div>
						  </div>
						   <div class="form-group">
						   <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">Kode Security :</label>
								  <input type="text" id="kodesecurity" class="form-control" name="kodesecurity" value="<?php echo $detil['KODE_SECURITY']?>" required />
							  </div>
							<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">Produk :</label>
								   <select id="produk" name="produk" class="form-control" required>
									  <option value=""></option>
									   <?php foreach($produk as $produk):?>
										<?php if($produk == $detil['PRODUK']):?>
										<option value="<?php echo $produk?>" selected><?php echo $produk?></option>
										<?php else:?>
										<option value="<?php echo $produk?>"><?php echo $produk?></option>
										<?php endif;?>
										<?php endforeach;?>
								  </select>
							  </div>
							  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">Nama Produk :</label>
								  <input type="text" id="namaproduk" class="form-control" name="namaproduk" value="<?php echo $detil['NAMA_PRODUK']?>" required />
							  </div>
						  </div>
						   <div class="form-group">
						   <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">Mac Address:</label>
								  <input type="text" id="mac" class="form-control" name="mac" value="<?php echo $detil['MAC_ADDRESS']?>" required />
							  </div>
							<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">IP Address :</label>
								  <input type="text" id="ip" class="form-control" name="ip" value="<?php echo $detil['IP_ADDRESS']?>" required />
							  </div>
							<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label for="">Operator :</label>
								   <select id="operatorpop" name="operatorpop" class="form-control" required>
									  <option value=""></option>
									  <?php foreach($operator as $o) {?>
									  <?php if($o['ID_OPERATOR'] == $detil['id_operator']):?>
									  <option value="<?php echo $o['ID_OPERATOR']?>" selected><?php echo $o['NAMA_OPERATOR']?></option>
									  <?php else:?>
									  <option value="<?php echo $o['ID_OPERATOR']?>"><?php echo $o['NAMA_OPERATOR']?></option>
									  <?php endif;?>
									  <?php }?>
								  </select>
							  </div>
						  </div>
						  <div class="form-group">
							  <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit data</button>
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