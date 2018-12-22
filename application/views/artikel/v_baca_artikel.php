<?php $this->load->view('v_header'); ?>

<div class="content">
    <?php
    if(is_array($artikel)){
        foreach ($artikel as $ar) {
     ?>
        <div class="left-box" style="min-height: 100px;">
            <h2><?php echo $ar->judul ?></h2>
            <hr>
            <div style="text-align: center;">
                <?php 
                    foreach ($user as $us) {
                        if($ar->id_user == $us->id_user){
                            echo "&nbsp <i class='fas fa-user'></i> $us->nama_lengkap";
                        }
                    }
                ?>
                |
                <?php 
                    foreach ($kategori as $kat) {
                        if($ar->id_kategori == $kat->id_kategori){
                            echo "&nbsp <i class='fas fa-tag'></i> $kat->nama_kategori";
                        }
                    }
                ?>
                | <i class="fas fa-calendar"></i> <?php echo $ar->tanggal_post ?>
                | <i class="fas fa-eye"></i> <?php echo $ar->dilihat ?>
            </div>
                <hr>
                <img src="<?php echo base_url()?>assets/foto/artikel/<?php echo $ar->foto ?>" alt="" class="prev"  width="600px" style="margin:10px; margin-bottom:20px; "/>
                <br>
                <br>
                <p class="para" align="left"><?php echo $ar->isi ?></p>
                <div class="clear"></div>
        </div>
    <?php 
        }
    }
    ?>
</div>

<?php $this->load->view('v_footer'); ?>