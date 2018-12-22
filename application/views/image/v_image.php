<?php $this->load->view('v_header'); ?>

<div class="content">

    <?php
        if(is_array($image)){
            foreach ($image as $im) {
            ?>
                <div class="left-box" style="min-height: 100px; width: 25%; float: left; min-height:355px;">
                    <img src="<?php echo base_url()?>assets/gallery/image/<?php echo $im->image ?>" width="400px">
                    <div class="clear"></div>
                    <p class="more">
                        <center>
                        <?php echo $im->caption ?>
                        <hr>
                        <?php
                        if(is_array($user)){
                            foreach ($user as $us) {
                                if($im->id_user == $us->id_user){
                                    echo " <i class='fas fa-user'></i> $us->nama_lengkap | ";
                                }
                            }
                        }
                        ?>
                        <i class='fas fa-calendar'></i> <?php echo $im->tanggal ?>
                        </center>
                    </p>
                </div>
            <?php
            }
        }
    ?>
</div>

<?php $this->load->view('v_footer_gallery'); ?>