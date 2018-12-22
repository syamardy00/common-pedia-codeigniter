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
<div id="page-wrapper" style="background-color: #EF8D31;">
	<div class="main-page login-page ">
		<h2 class="title1" >Common-Pedia</h2>
		<div class="widget-shadow">
			<div class="login-body">
				<form action="<?php echo base_url('index.php/user/login') ?>" method="post">
					<input type="text" class="user" name="username" placeholder="Enter Your Username" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<input type="hidden" name="aksi" value="login">
					<input type="submit" name="Sign In" value="Sign In" class="col-md-12">
					<div class="registration">
						Belum Punya Akun ?
						<a class="" href="#" data-toggle="modal" data-target="#register" data-whatever="@mdo">
							Buat Akun
						</a> <br> <a class="" href="<?php echo base_url() ?>" data-toggle="modal" data-target="" data-whatever="@mdo">
							Kembali Ke Home
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Register</h4>
            </div>
            <div class="modal-body">
                    <div class="form-three widget-shadow" style="margin:0px;">
                        <form action="<?php echo base_url('index.php/user/aksi_register')?>" method="post" enctype="multipart/form-data" data-toggle="validator" class="form-horizontal">
                            <div class="forms validation" style="margin: 0px;">
                                <div class="form-body" style="margin: -30px;">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputName" placeholder="Username..." required name="username">
                                    </div>
                                    <div class="form-group">
                                      <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password..." required name="password">
                                    </div>
                                    <div class="form-group">
                                      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm new password" required>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="nama_lengkap" class="form-control1" id="focusedinput" placeholder="Nama Lengkap..." required" ">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group input-icon right">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                        <input id="email" class="form-control1" type="text" name="email" placeholder="Email...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="datepicker col-sm-12"  data-date-format="yyyy-mm-dd" type="text" name="tgl_lahir" placeholder="Tanggal Lahir ...">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="no_tlp" class="form-control1" id="focusedinput" required placeholder="Nomo Telepon...">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <select multiple="" class="form-control1" name="jenis_kelamin">
                                        <option value='Laki-Laki' selected>Laki-Laki</option>
                                        <option value='Perempuan'>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <select multiple="" class="form-control1" name="agama">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                </div>
                            </div>
                            <div class="form-group"> 
                                <label class="col-sm-2 control-label">Foto</label> 
                                <div class="col-sm-8">
                                    <input type="file" id="exampleInputFile" name="foto" required> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Bio</label>
                                <div class="col-sm-8">
                                    <textarea name="bio" id="txtarea1" cols="50" rows="4" class="col-sm-12" style="text-align: left;">
                                    </textarea>
                                </div>
                                <div class="col-sm-2">
                                </div>
                            </div>
                            <br>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="aksi" value="register">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input  type="submit" class="btn btn-primary" value="Register"></button>
            </div>
            </form>
        </div>
    </div>
</div>

<!--footer-->
	<div class="footer">
	   <p>&copy; 2018 Common-Pedia Dashboard. All Rights Reserved</p>		
	</div>
    <!--//footer-->
	</div>
	<script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
		
	<!-- new added graphs chart js-->
	
    <script src="<?php echo base_url() ?>assets/js/Chart.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js/utils.js"></script>
	
	<script>
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: 'Dataset 2',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Bar Chart'
                    }
                }
            });

        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            var zero = Math.random() < 0.2 ? true : false;
            barChartData.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return zero ? 0.0 : randomScalingFactor();
                });

            });
            window.myBar.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
            var dsColor = window.chartColors[colorName];
            var newDataset = {
                label: 'Dataset ' + barChartData.datasets.length,
                backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                borderColor: dsColor,
                borderWidth: 1,
                data: []
            };

            for (var index = 0; index < barChartData.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            barChartData.datasets.push(newDataset);
            window.myBar.update();
        });

        document.getElementById('addData').addEventListener('click', function() {
            if (barChartData.datasets.length > 0) {
                var month = MONTHS[barChartData.labels.length % MONTHS.length];
                barChartData.labels.push(month);

                for (var index = 0; index < barChartData.datasets.length; ++index) {
                    //window.myBar.addData(randomScalingFactor(), index);
                    barChartData.datasets[index].data.push(randomScalingFactor());
                }

                window.myBar.update();
            }
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            barChartData.datasets.splice(0, 1);
            window.myBar.update();
        });

        document.getElementById('removeData').addEventListener('click', function() {
            barChartData.labels.splice(-1, 1); // remove the label first

            barChartData.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myBar.update();
        });
    </script>
	<!-- new added graphs chart js-->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="<?php echo base_url() ?>assets/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="<?php echo base_url() ?>assets/js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='<?php echo base_url() ?>assets/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
	<script src="<?php echo base_url() ?>assets/js/SimpleChart.js"></script>
    <script>
        var graphdata1 = {
            linecolor: "#CCA300",
            title: "Monday",
            values: [
            { X: "6:00", Y: 10.00 },
            { X: "7:00", Y: 20.00 },
            { X: "8:00", Y: 40.00 },
            { X: "9:00", Y: 34.00 },
            { X: "10:00", Y: 40.25 },
            { X: "11:00", Y: 28.56 },
            { X: "12:00", Y: 18.57 },
            { X: "13:00", Y: 34.00 },
            { X: "14:00", Y: 40.89 },
            { X: "15:00", Y: 12.57 },
            { X: "16:00", Y: 28.24 },
            { X: "17:00", Y: 18.00 },
            { X: "18:00", Y: 34.24 },
            { X: "19:00", Y: 40.58 },
            { X: "20:00", Y: 12.54 },
            { X: "21:00", Y: 28.00 },
            { X: "22:00", Y: 18.00 },
            { X: "23:00", Y: 34.89 },
            { X: "0:00", Y: 40.26 },
            { X: "1:00", Y: 28.89 },
            { X: "2:00", Y: 18.87 },
            { X: "3:00", Y: 34.00 },
            { X: "4:00", Y: 40.00 }
            ]
        };
        var graphdata2 = {
            linecolor: "#00CC66",
            title: "Tuesday",
            values: [
              { X: "6:00", Y: 100.00 },
            { X: "7:00", Y: 120.00 },
            { X: "8:00", Y: 140.00 },
            { X: "9:00", Y: 134.00 },
            { X: "10:00", Y: 140.25 },
            { X: "11:00", Y: 128.56 },
            { X: "12:00", Y: 118.57 },
            { X: "13:00", Y: 134.00 },
            { X: "14:00", Y: 140.89 },
            { X: "15:00", Y: 112.57 },
            { X: "16:00", Y: 128.24 },
            { X: "17:00", Y: 118.00 },
            { X: "18:00", Y: 134.24 },
            { X: "19:00", Y: 140.58 },
            { X: "20:00", Y: 112.54 },
            { X: "21:00", Y: 128.00 },
            { X: "22:00", Y: 118.00 },
            { X: "23:00", Y: 134.89 },
            { X: "0:00", Y: 140.26 },
            { X: "1:00", Y: 128.89 },
            { X: "2:00", Y: 118.87 },
            { X: "3:00", Y: 134.00 },
            { X: "4:00", Y: 180.00 }
            ]
        };
        var graphdata3 = {
            linecolor: "#FF99CC",
            title: "Wednesday",
            values: [
              { X: "6:00", Y: 230.00 },
            { X: "7:00", Y: 210.00 },
            { X: "8:00", Y: 214.00 },
            { X: "9:00", Y: 234.00 },
            { X: "10:00", Y: 247.25 },
            { X: "11:00", Y: 218.56 },
            { X: "12:00", Y: 268.57 },
            { X: "13:00", Y: 274.00 },
            { X: "14:00", Y: 280.89 },
            { X: "15:00", Y: 242.57 },
            { X: "16:00", Y: 298.24 },
            { X: "17:00", Y: 208.00 },
            { X: "18:00", Y: 214.24 },
            { X: "19:00", Y: 214.58 },
            { X: "20:00", Y: 211.54 },
            { X: "21:00", Y: 248.00 },
            { X: "22:00", Y: 258.00 },
            { X: "23:00", Y: 234.89 },
            { X: "0:00", Y: 210.26 },
            { X: "1:00", Y: 248.89 },
            { X: "2:00", Y: 238.87 },
            { X: "3:00", Y: 264.00 },
            { X: "4:00", Y: 270.00 }
            ]
        };
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [
              { X: "6:00", Y: 300.00 },
            { X: "7:00", Y: 410.98 },
            { X: "8:00", Y: 310.00 },
            { X: "9:00", Y: 314.00 },
            { X: "10:00", Y: 310.25 },
            { X: "11:00", Y: 318.56 },
            { X: "12:00", Y: 318.57 },
            { X: "13:00", Y: 314.00 },
            { X: "14:00", Y: 310.89 },
            { X: "15:00", Y: 512.57 },
            { X: "16:00", Y: 318.24 },
            { X: "17:00", Y: 318.00 },
            { X: "18:00", Y: 314.24 },
            { X: "19:00", Y: 310.58 },
            { X: "20:00", Y: 312.54 },
            { X: "21:00", Y: 318.00 },
            { X: "22:00", Y: 318.00 },
            { X: "23:00", Y: 314.89 },
            { X: "0:00", Y: 310.26 },
            { X: "1:00", Y: 318.89 },
            { X: "2:00", Y: 518.87 },
            { X: "3:00", Y: 314.00 },
            { X: "4:00", Y: 310.00 }
            ]
        };
        var Piedata = {
            linecolor: "Random",
            title: "Profit",
            values: [
              { X: "Monday", Y: 50.00 },
            { X: "Tuesday", Y: 110.98 },
            { X: "Wednesday", Y: 70.00 },
            { X: "Thursday", Y: 204.00 },
            { X: "Friday", Y: 80.25 },
            { X: "Saturday", Y: 38.56 },
            { X: "Sunday", Y: 98.57 }
            ]
        };
        $(function () {
            $("#Bargraph").SimpleChart({
                ChartType: "Bar",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#sltchartype").on('change', function () {
                $("#Bargraph").SimpleChart('ChartType', $(this).val());
                $("#Bargraph").SimpleChart('reload', 'true');
            });
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Linegraph").SimpleChart({
                ChartType: "Line",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Areagraph").SimpleChart({
                ChartType: "Area",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Scatterredgraph").SimpleChart({
                ChartType: "Scattered",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Piegraph").SimpleChart({
                ChartType: "Pie",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                showpielables: true,
                data: [Piedata],
                legendsize: "250",
                legendposition: 'right',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#Stackedbargraph").SimpleChart({
                ChartType: "Stacked",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#StackedHybridbargraph").SimpleChart({
                ChartType: "StackedHybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });

    </script>
	<!-- //for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url() ?>assets/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->

	<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

    <!-- Fungsi datepickier yang digunakan -->
    <script type="text/javascript">
     $('.datepicker').datetimepicker({
            language:  'id',
            weekStart: 1,
            todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
        });
    </script> 
	<script src="<?php echo base_url()?>assets/js/validator.min.js"></script>
</body>
</html>