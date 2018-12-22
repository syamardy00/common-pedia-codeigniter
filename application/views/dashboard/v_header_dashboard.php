<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Common-Pedia</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='<?php echo base_url() ?>assets/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/modernizr.custom.js"></script>

<!--webfonts-->
<!-- <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet"> -->
<!--//webfonts--> 

<!-- chart -->
<script src="<?php echo base_url() ?>assets/js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="<?php echo base_url() ?>assets/js/metisMenu.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
<link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="<?php echo base_url() ?>assets/js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="<?php echo base_url() ?>assets/css/owl.carousel.css" rel="stylesheet">
					<script src="<?php echo base_url() ?>assets/js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="#"><span class="fa fa-book"></span> Com-Ped<span class="dashboard_text">Common-Dashboard</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="<?php echo base_url('index.php/dashboard/profil') ?>">
                <i class="fa fa-user"></i> <span>Your Profile</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                <i class="fa fa-key"></i> <span>Change Password</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-book"></i>
                <span>Your Article</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('index.php/dashboard/artikel/add_artikel') ?>"><i class="fa fa-angle-right"></i> Post New Article</a></li>
                  <li><a href="<?php echo base_url('index.php/dashboard/artikel') ?>"><i class="fa fa-angle-right"></i> Manage Article</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-film"></i>
                <span>Gallery</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('index.php/dashboard/image') ?>"><i class="fa fa-angle-right"></i> Image Gallery</a></li>
                  <li><a href="<?php echo base_url('index.php/dashboard/audio') ?>"><i class="fa fa-angle-right"></i> Audio Gallery</a></li>
                  <li><a href="<?php echo base_url('index.php/dashboard/video') ?>"><i class="fa fa-angle-right"></i> Video Gallery</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="<?php echo base_url() ?>">
                <i class="fa fa-globe"></i>
                <span>Go Back To Website</span>
                </a>
              </li>
              <li class="treeview">
                <a href="<?php echo base_url('index.php/user/logout') ?>">
                <i class="fa fa-sign-out"></i>
                <span>Sign Out</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section " style="background-color:#222D32;">
			<div class="header-left">
							<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img">
										<img src="<?php echo base_url().'assets/foto/profil/'.$user[0]->foto ?>" alt="" width=50px> 
									</span> 
									<div class="user-name">
										<p style="color:#B8C7CE"><?php echo $user[0]->nama_lengkap; ?></p>
										<span style="color:#B8C7CE"><?php echo $user[0]->email; ?></span>
									</div>
									<i class="fa fa-angle-down lnr" style="color:#B8C7CE"></i>
									<i class="fa fa-angle-up lnr" style="color:#B8C7CE"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="<?php echo base_url('index.php/dashboard/profil') ?>"><i class="fa fa-user"></i> Your Profile</a> </li> 
								<li> <a href="<?php echo base_url('index.php/user/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Change Password</h4>
			</div>
			<div class="modal-body">
				<div class="forms validation">
					<div class="form-body">
						<form data-toggle="validator" method="post" action="<?php echo base_url('index.php/dashboard/profil/ganti_password') ?>">
							<div class="form-group">
							  <input type="password" data-toggle="validator" data-minlength="" class="form-control" id="" placeholder="Password" required name="password">
							</div>
							<div class="form-group">
							  <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="New Password" required name="password_baru">
							</div>
							<div class="form-group">
							  <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm new password" required>
							  <div class="help-block with-errors"></div>
							</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<input  type="submit" class="btn btn-primary" value="Change Password"></button>
			</div>
		</form>
		</div>
	</div>
</div>