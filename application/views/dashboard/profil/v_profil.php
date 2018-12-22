<?php $this->load->view('dashboard/v_header_dashboard'); 

if(is_array($user)){
	foreach ($user as $us) {

?>
<div id="page-wrapper">
	<div class="main-page">
		<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Your Profile</h4>
			</div>
			<div class="form-body">
				<div class="row">
					<div class="form-three widget-shadow">
						<form class="form-horizontal" action="<?php echo base_url('index.php/dashboard/profil/aksi_edit')?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Username</label>
								<div class="col-sm-8">
									<input type="text" name="username" class="form-control1" id="disabledinput" required readonly="true" disabled value="<?php echo $us->username ?>">
								</div>
								<div class="col-sm-2">
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Nama Lengkap</label>
								<div class="col-sm-8">
									<input type="text" name="nama_lengkap" class="form-control1" id="focusedinput" placeholder="Nama lengkap..." required" value="<?php echo $us->nama_lengkap ?>">
								</div>
								<div class="col-sm-2">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Email</label>
								<div class="col-md-8">
									<div class="input-group input-icon right">
										<span class="input-group-addon">
											<i class="fa fa-envelope-o"></i>
										</span>
										<input id="email" class="form-control1" type="text" name="email" placeholder="Email Address" value="<?php echo $us->email ?>">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Tanggal Lahir</label>
								<div class="col-sm-8">
									<input class="datepicker col-sm-12"  data-date-format="yyyy-mm-dd" type="text" name="tgl_lahir" value="<?php echo $us->tgl_lahir ?>">
								</div>
								<div class="col-sm-2">
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Nomor Telepon</label>
								<div class="col-sm-8">
									<input type="text" name="no_tlp" class="form-control1" id="focusedinput" required value="<?php echo $us->no_tlp ?>">
								</div>
								<div class="col-sm-2">
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Jenis Kelamin</label>
								<div class="col-sm-8">
									<select multiple="" class="form-control1" name="jenis_kelamin">
										<?php
										if($us->jenis_kelamin == 'Laki-Laki'){
											echo "<option value='Laki-Laki' selected>Laki-Laki</option>";
											echo "<option value='Perempuan'>Perempuan</option>";
										}else{
											echo "<option value='Laki-Laki'>Laki-Laki</option>";
											echo "<option value='Perempuan' selected>Perempuan</option>";
										}
										?>
									</select>
								</div>
								<div class="col-sm-2">
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Agama</label>
								<div class="col-sm-8">
									<select multiple="" class="form-control1" name="agama">
										<?php
											echo "<option value='$us->agama' selected>$us->agama</option>";
										?>
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
									<img src="<?php echo base_url()?>assets/foto/profil/<?php echo $us->foto ?>" height=150px style="border: 1px solid black;">
									<input type="file" id="exampleInputFile" name="foto"> 
									<p class="help-block">*Abaikan jika tidak ingin mengganti foto</p> 
								</div>
							</div>
							<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">Bio</label>
								<div class="col-sm-8">
									<textarea name="bio" id="txtarea1" cols="50" rows="4" class="col-sm-12" style="text-align: left;">
										<?php echo $us->bio; ?>
									</textarea>
								</div>
								<div class="col-sm-2">
								</div>
							</div>
							<br>
							<input type="hidden" name="id_user" value="<?php echo $us->id_user ?>">
							<input type="hidden" name="aksi" value="edit_user">
							<div class="form-group">
								<button type="submit" class="btn btn-primary col-sm-12" style="background-color: #1A2226;">Simpan Perubahan</button>
							</div>
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