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
				 <form class="form-horizontal" method="post" action="<?php echo base_url('router/editrouter')?>">
					  <div class="form-group">
					  <input type="hidden" class="form-control" name="id_pengguna_router" id="id_pengguna_router" value="<?php echo $router['ID_PENGGUNA_ROUTER']?>">
						<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
							<label for="">Nama BTS/POP :</label>
							   <select id="namabts" onchange="infoRouter()" name="namabts" class="form-control" required>
								  <option value=""></option>
								  <?php foreach($btspop as $b) {?>
								  <?php if($b['ID_BTS'] == $router['id_bts']):?>
								  <option value="<?php echo $b['ID_BTS']?>" selected><?php echo $b['NAMA_BTS']?></option>
								  <?php else:?>
								  <option value="<?php echo $b['ID_BTS']?>"><?php echo $b['NAMA_BTS']?></option>
								  <?php endif;?>
								  <?php }?>
							  </select>
						  </div>
						  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
							<label for="">Latitude :</label>
							  <input type="text" id="lat" class="form-control" name="lat" value="<?php echo $router['LAT_BTS']?>" required readonly />
						  </div>
						  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
							<label for="">Longitude :</label>
							  <input type="text" id="long" class="form-control" name="long" value="<?php echo $router['LONG_BTS']?>" required readonly />
						  </div>
					  </div>
					 <div class="form-group">
					 <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<label for="">Lokasi :</label>
							  <input type="text" id="lokasirouter" class="form-control" name="lokasi" value="<?php echo $router['LOKASI_BTS']?>" required readonly />
						  </div>
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<label for="">Identitas Router :</label>
							  <input type="text" id="identitas" class="form-control" name="identitas" value="<?php echo $router['IDENTITAS']?>" required />
						  </div>
					  </div>
					   <div class="form-group">
					   <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
							<label for="">IP Address Router :</label>
							  <input type="text" id="iprouter" class="form-control" name="iprouter" value="<?php echo $router['IP_ROUTER']?>" required />
						  </div>
						 <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
							<label for="">Mac Address Router :</label>
							  <input type="text" id="macrouter" class="form-control" name="macrouter" value="<?php echo $router['MAC_ROUTER']?>" required />
						  </div>
						<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
							<label for="">Produk Router :</label>
							   <select id="produkrouter" name="produkrouter" class="form-control" required>
								  <option value=""></option>
								  <?php foreach($produk as $produk):?>
								  <?php if($produk == $router['PRODUK_ROUTER']):?>
								  <option value="<?php echo $produk?>" selected><?php echo $produk?></option>
								  <?php else:?>
								  <option value="<?php echo $produk?>"><?php echo $produk?></option>
								  <?php endif;?>
								  <?php endforeach;?>
							  </select>
						  </div>
					  </div>
					  <div class="form-group">
					  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<label for="">Nama Produk Router :</label>
							  <input type="text" id="namarouter" class="form-control" name="namarouter" value="<?php echo $router['NAMA_PRODUK_ROUTER']?>" required />
						  </div>
						  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<label for="">Operator :</label>
							   <select id="operator" name="operator" class="form-control" required>
								  <option value=""></option>
								  <?php foreach($operator as $o){?>
								  <?php if($o['ID_OPERATOR'] == $router['id_operator']):?>
								  <option value="<?php echo $o['ID_OPERATOR']?>" selected><?php echo $o['NAMA_OPERATOR']?></option>
								  <?php else:?>
								  <option value="<?php echo $o['ID_OPERATOR']?>"><?php echo $o['NAMA_OPERATOR']?></option>
								  <?php endif;?>
								  <?php }?>
							  </select>
						  </div>
					  </div>
					  <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit data</button>
					</div>
				  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<?php include 'Js.php'?>