        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><img src="<?php echo base_url('assets/')?>img/wifi.png" width="40"> <span> SI-POP</span></a>
            </div>
            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url('assets/production/')?>images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $user['NAMA_USER']?></h2>
                <input type="hidden" class="form-control" name="user_level" id="user_level" value="<?php echo $user['TIPE']?>">
                <input type="hidden" class="form-control" name="iduserlevel" id="iduserlevel" value="<?php echo $user['ID_USER']?>">
              </div>
            </div>
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('dashboard/index')?>">Dashboard</a></li>
                    </ul>
                  </li>
				          <li><a><i class="fa fa-desktop"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('bts/index')?>">Data BTS</a></li>
                      <li><a href="<?php echo base_url('operator/index')?>">Data Operator</a></li>
                      <li><a href="<?php echo base_url('penggunabts/index')?>">Daftar BTS / POP</a></li>
                      <li><a href="<?php echo base_url('router/index')?>">Data Router</a></li>
                    </ul>
                  </li>
				          <li><a><i class="fa fa-user"></i> Management User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('user/index')?>">Data User</a></li>
					            <li><a href="<?php echo base_url('userlog/index')?>">User Log</a></li>
                    </ul>
                  </li>
				          <li><a><i class="fa fa-map-marker"></i> Maps<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('maps/index')?>">Pemetaan Lokasi BTS</a></li>
                    </ul>
                  </li>
				          <li><a><i class="fa fa-cogs"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('user/ubahpassword')?>">Ubah Password</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>