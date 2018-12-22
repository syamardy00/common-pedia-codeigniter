<?php $this->load->view('dashboard/v_header_dashboard'); 
if(is_array($artikel)){
	foreach ($artikel as $ar) {
?>
<div id="page-wrapper">
	<div class="main-page">
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Edit Article :</h4>
			</div>
			<div class="form-body">
				<div class="row">
					<div class="form-three widget-shadow" data-example-id="basic-forms">
						<form class="form-horizontal" action="<?php echo base_url('index.php/dashboard/artikel/edit_artikel')?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Judul Artikel</label>
								<div class="col-sm-8">
									<input type="text" name="judul" class="form-control1" id="focusedinput" placeholder="Judul Artikel..." value="<?php echo $ar->judul ?>" required>
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
													echo "<option value='$kat->id_kategori' ";
					                				echo $artikel[0]->id_kategori==$kat->id_kategori?'selected':'';
					                				echo ">$kat->nama_kategori</option>";
													
												}
											}
										?>
									</select>
								</div>
							</div>
							<div class="form-body">
								<div class="form-group"> 
									<label class="col-sm-2 control-label">Foto</label> 
									<div class="col-sm-8">
										<img src="<?php echo base_url()?>assets/foto/artikel/<?php echo $ar->foto ?>" height=150px style="border: 1px solid black;">
										<input type="file" id="exampleInputFile" name="foto"> 
										<p class="help-block">*Abaikan jika tidak ingin mengganti gambar</p> 
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<textarea name="isi" class="col-sm-12 ckeditor" id=ckeditor><?php echo $ar->isi ?></textarea>
								</div>
								<div class="col-sm-2">
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary col-sm-12" style="background-color: #1A2226;">Post It</button>
							</div>
							<input type="hidden" name="id_artikel" value="<?php echo $ar->id_artikel ?>">
							<input type="hidden" name="aksi" value="edit_artikel">	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	}
}
$this->load->view('dashboard/v_footer_dashboard'); ?>