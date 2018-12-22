<?php $this->load->view('v_header'); ?>

<div class="content">

    <?php
        if(is_array($video)){
            foreach ($video as $vd) {
            ?>
            <div class="left-box" style="min-height:100px; min-width: 135%;">
                <center>
                    <video controls="controls" id="video1" width="100%" 
                        data-setup='{"controls" : true, "autoplay" : true, "preload" : "auto"}'>
                        <source src="<?php echo base_url()?>assets/gallery/video/<?php echo $vd->video?>" type='video/mp4' />
                        <source src="<?php echo base_url()?>assets/gallery/video/<?php echo $vd->video?>" type='video/ogg' />
                        <source src="<?php echo base_url()?>assets/gallery/video/<?php echo $vd->video?>" type='video/webm' />
                        <source src="<?php echo base_url()?>assets/gallery/video/<?php echo $vd->video?>" type='video/avi' />
                        <source src="<?php echo base_url()?>assets/gallery/video/<?php echo $vd->video?>" type='video/flv' />
                        <source src="<?php echo base_url()?>assets/gallery/video/<?php echo $vd->video?>" type='video/wmv' />
                    </video>
                </center>
                <hr>
                <h2><?php echo $vd->judul_video ?></h2>
                <hr>
                <div style="text-align: left;">
                    <?php 
                        foreach ($user as $us) {
                            if($vd->id_user == $us->id_user){
                                echo "&nbsp <i class='fas fa-user'></i> $us->nama_lengkap";
                            }
                        }
                    ?>
                    | <i class="fas fa-calendar"></i> <?php echo $vd->tanggal ?>
                </div>                                                             
                <p class="para">
                </p>
                <div class="clear"></div>
                <p class="more"></p>
            </div>
            <?php
            }
        }
    ?>
</div>

<?php $this->load->view('v_footer_gallery'); ?>