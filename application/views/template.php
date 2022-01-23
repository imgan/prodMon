<!doctype html>
<html class="no-js" lang="en">

<?php $this->load->view("template/header.php"); ?>

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0; background-color:white">
              <a href="<?php echo base_url(); ?>" class="site_title"><img height="45" width="180" src="<?php echo base_url();?>assets/logo.png"></i> </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <?php $this->load->view("template/profile.php"); ?>
            <!-- /menu profile quick info -->

            <br />

            <?php $this->load->view("template/sidebar.php");?>

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?php $this->load->view("page/" . $page_content);?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php $this->load->view("template/footer.php");?>
        <!-- /footer content -->
      </div>
    </div>

    <?php $this->load->view("template/js-main.php"); ?>
	
  </body>
</html>
