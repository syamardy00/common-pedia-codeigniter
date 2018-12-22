<?php $this->load->view('v_header'); ?>

<div class="content">

    <?php
        if(is_array($audio)){
            foreach ($audio as $au) {
            ?>
            <div class="left-box" style="height:100px; width: 170%;">
                <h2><?php echo $au->judul_audio ?></h2>
                
                <div style="text-align: right;">
                    <?php 
                        foreach ($user as $us) {
                            if($au->id_user == $us->id_user){
                                echo "&nbsp <i class='fas fa-user'></i> $us->nama_lengkap";
                            }
                        }
                    ?>
                    | <i class="fas fa-calendar"></i> <?php echo $au->tanggal ?>
                </div>
                <hr>
                <audio preload='none' style='width:100%;' controls='controls'>
                    <source type='audio/mpeg' src='<?php echo base_url()?>assets/gallery/audio/<?php echo $au->audio?>' />
                </audio> 
                <hr>                                                               
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