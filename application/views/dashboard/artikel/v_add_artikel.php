<?php $this->load->view('dashboard/v_header_dashboard'); ?>
<div id="page-wrapper">
	<div class="main-page">
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Post New Article :</h4>
			</div>
			<div class="form-body">
				<div class="row">
					<div class="form-three widget-shadow">
						<form class="form-horizontal" action="<?php echo base_url('index.php/dashboard/artikel/aksi_simpan')?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Judul Artikel</label>
								<div class="col-sm-8">
									<input type="text" name="judul" class="form-control1" id="focusedinput" placeholder="Judul Artikel..." required>
								</div>
								<div class="col-sm-2">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Kategori Artikel</label>
								<div class="col-sm-8">
									<select multiple="" class="form-control1" name="id_kategori">
										<?php
											if(is_array($kategori)){
												foreach ($kategori as $kat) {
													echo "<option value='$kat->id_kategori'>$kat->nama_kategori</option>";
												}
											}
										?>
									</select>
								</div>
							</div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Foto</label> 
								<div class="col-sm-8">
									<input type="file" id="exampleInputFile" name="foto" required> 
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<textarea name="isi" class="col-sm-12 ckeditor" id=ckeditor ></textarea>
								</div>
								<div class="col-sm-2">
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary col-sm-12" style="background-color: #1A2226;">Post It</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('dashboard/v_footer_dashboard'); ?>