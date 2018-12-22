<?php $this->load->view('dashboard/v_header_dashboard'); ?>
<div id="page-wrapper">
	<div class="main-page">
		<div class="forms">
			<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title">
					<h4>Image Gallery</h4>
				</div>

				<div class="forms">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-body">
							<h2>Upload New Image</h2>
							<hr>
							<form action="<?php echo base_url('index.php/dashboard/image/aksi_simpan')?>" method="post" enctype="multipart/form-data">  
								<div class="form-group"> 
									<input type="file" id="exampleInputFile" name="gambar" required="true"> 
									<p class="help-block">Pilih file gambar.</p> 
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="" placeholder="Caption..." name="caption"> 
								</div>
								<button type="submit" class="btn btn-default">Upload Image</button> 
							</form> 
						</div>
					</div>
				</div>
			</div>

			<div class="elements" style="min-height: 400px;">

			<?php
				if(is_array($image)){
					foreach ($image as $im) {
					?>
					<div class="col-sm-3 wthree-crd widgettable">
	                    <div class="card" style="min-height: 300px;">
	                        <div class="card-body">
								<div class="agileinfo-cdr">
		                            <div class="widget-body">
		                               <img src="<?php echo base_url()?>assets/gallery/image/<?php echo $im->image ?>" width="200px">
		                            </div>
		                            <hr class="widget-separator">
		                            <center>
		                            	<a href="<?php echo base_url()?>index.php/dashboard/image/delete/<?php echo $im->id_image ?>">
		                            		<button class="btn btn-danger">Delete Image</button>
		                            	</a>
		                            </center> 
		                        </div>
	                        </div>
	                    </div>
	                </div>
	                <?php
	                }
				}
			?>
            </div>
            <div style="clear:both;"></div>
		</div>
	</div>
</div>

<?php $this->load->view('dashboard/v_footer_dashboard'); ?>