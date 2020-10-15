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
                    <?php include 'inputpop.php'?>
                    <button type="button" class="btn btn-sm btn-primary" onclick="tambahpengguna()" title="Tambah Data"><i class="fa fa-plus"></i> Tambah Data</button>
                    <a href="<?php echo base_url('pdf/report_bts')?>" target="_blank" class="btn btn-sm btn-default" title="Export Data"><i class="fa fa-download"></i> Export PDF</a>
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
                    <table id="datapop" width="100%" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Nama BTS</th>
                          <th>SSID</th>
                          <th>Produk</th>
                          <th>IP Address</th>
                          <th>Mac Address</th>
                          <th>Operator</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<?php include 'hapuspop.php'?>
		<?php include 'Js.php'?>
		<?php include 'detilpop.php'?>