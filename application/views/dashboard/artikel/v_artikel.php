<?php $this->load->view('dashboard/v_header_dashboard'); ?>
<div id="page-wrapper">
	<div class="main-page">
		<div class="forms">
			<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title">
					<h4>Manage Your Article</h4>
				</div>
				<div class="tables">
					<table class="table table-hover"> 
						<thead> 
							<tr>
								<th>No</th> 
								<th>Judu Artikel</th> 
								<th>Kategori</th> 
								<th>Tanggal Post</th> 
								<th>Dilihat</th> 
								<th>Aksi</th> 
							</tr> 
						</thead> 
						<tbody> 
							<?php
								$no = 1;
								if(is_array($artikel)){
									foreach ($artikel as $ar) {
							?>
							<tr> 
								<th><?php echo $no++ ?></th> 
								<td><?php echo $ar->judul ?></td>
								<?php
								if(is_array($kategori)){
									foreach ($kategori as $kat) {
										if($ar->id_kategori == $kat->id_kategori){
											echo "<td>$kat->nama_kategori</td>";
										}
									}
								}
								?>  
								<td><?php echo $ar->tanggal_post ?></td> 
								<td><?php echo $ar->dilihat ?></td> 
								<td>
									<a href="<?php echo base_url()?>index.php/dashboard/artikel/edit_artikel/<?php echo $ar->slug ?>">
									<i class="fa fa-pencil"></i> | 
									<a href="<?php echo base_url()?>index.php/dashboard/artikel/delete_artikel/<?php echo $ar->id_artikel ?>">
									<i class="fa fa-trash"></i></td> 
							</tr>
							<?php 
									}
								}
							?>
						</tbody> 
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('dashboard/v_footer_dashboard'); ?>