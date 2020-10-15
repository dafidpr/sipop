        <?php cek_user()?>
		<div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count"><?php echo $pengguna;?></div>
                  <h3> User</h3>
                  <p>Jumlah user.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count"><?php echo $operator;?></div>
                  <h3> Operator</h3>
                  <p>Jumlah operator.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-shield"></i></div>
                  <div class="count"><?php echo $bts;?></div>
                  <h3> BTS/POP</h3>
                  <p>Jumlah BTS/POP.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-rss"></i></div>
                  <div class="count"><?php echo $router;?></div>
                  <h3>Router</h3>
                  <p>Jumlah pengguna router.</p>
                </div>
              </div>
            </div>
			<div class="row">
              <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
				   <h2>Terakhir Login</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
				   <div class="x_content">
				   <ul class="list-unstyled top_profiles scroll-view">
					<?php foreach($userlog as $u):?>
					  <li class="media event">
						<a class="pull-left border-green profile_thumb">
						  <i class="fa fa-user green"></i>
						</a>
						<div class="media-body">
						  <a class="title" href="#"><?php echo $u['nama_user']?></a>
						  <p><?php echo $u['tipe']?></p>
						  <p> <small><?php echo $u['waktu']?></small>
						  </p>
						</div>
					  </li>
					  <?php endforeach;?>
					</ul>
				   </div>
                </div>
              </div>
            </div>
          </div>
        </div>

	