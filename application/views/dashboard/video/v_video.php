<?php $this->load->view('dashboard/v_header_dashboard'); ?>
<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">
            <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                <div class="form-title">
                    <h4>Video Gallery</h4>
                </div>

                <div class="forms">
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-body">
                            <h2>Upload New Video</h2>
                            <hr>
                            <form action="<?php echo base_url('index.php/dashboard/video/aksi_simpan')?>" method="post" enctype="multipart/form-data">  
                                <div class="form-group"> 
                                    <input type="file" id="exampleInputFile" name="video" required="true"> 
                                    <p class="help-block">Pilih file video.</p> 
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Judul Video..." name="judul_video"> 
                                </div>
                                <button type="submit" class="btn btn-default">Upload Video</button> 
                            </form> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="elements" style="min-height: 400px;">

            <?php
                if(is_array($video)){
                    foreach ($video as $vd) {
                    ?>
                    <div class="col-sm-4 wthree-crd widgettable">
                        <div class="card" style="min-height:450px;">
                            <div class="card-body">
                                <div class="agileinfo-cdr">
                                    <div class="widget-body">
                                    <video controls="controls" id="video1" width="300" height="220"
                                        data-setup='{"controls" : true, "autoplay" : true, "preload" : "auto"}'>
                                        <source src="<?php echo base_url()?>assets/gallery/video/<?php echo $vd->video?>" type='video/mp4' />
                                        <source src="<?php echo base_url()?>assets/gallery/video/<?php echo $vd->video?>" type='video/ogg' />
                                        <source src="<?php echo base_url()?>assets/gallery/video/<?php echo $vd->video?>" type='video/webm' />
                                        <source src="<?php echo base_url()?>assets/gallery/video/<?php echo $vd->video?>" type='video/avi' />
                                        <source src="<?php echo base_url()?>assets/gallery/video/<?php echo $vd->video?>" type='video/flv' />
                                        <source src="<?php echo base_url()?>assets/gallery/video/<?php echo $vd->video?>" type='video/wmv' />
                                    </video>
                                    </div>
                                    <hr class="widget-separator">
                                    <?php echo $vd->judul_video?>
                                    <hr class="widget-separator">
                                    <center>
                                        <a href="<?php echo base_url()?>index.php/dashboard/video/delete/<?php echo $vd->id_video ?>">
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