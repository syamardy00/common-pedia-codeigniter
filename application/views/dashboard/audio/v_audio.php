<?php $this->load->view('dashboard/v_header_dashboard'); ?>
<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">
            <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                <div class="form-title">
                    <h4>Audio Gallery</h4>
                </div>

                <div class="forms">
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-body">
                            <h2>Upload New Audio</h2>
                            <hr>
                            <form action="<?php echo base_url('index.php/dashboard/audio/aksi_simpan')?>" method="post" enctype="multipart/form-data">  
                                <div class="form-group"> 
                                    <input type="file" id="exampleInputFile" name="audio" required="true"> 
                                    <p class="help-block">Pilih file audio (*.mp3).</p> 
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Judul Audio..." name="judul_audio"> 
                                </div>
                                <button type="submit" class="btn btn-default">Upload Audio</button> 
                            </form> 
                        </div>
                    </div>

                    <div class="tables">
                    <table class="table table-hover"> 
                        <thead> 
                            <center>
                            <tr>
                                <th>No</th> 
                                <th>Judul Audio</th> 
                                <th>Tanggal</th> 
                                <th style="text-align: center">Audio</th> 
                                <th>Aksi</th> 
                            </tr> 
                        </thead> 
                        <tbody>
                        <?php 
                            $no =1;
                            if(is_array($audio)){
                                foreach ($audio as $au) {
                                    echo"
                                        <tr>
                                            <td>$no</td> 
                                            <td>$au->judul_audio</td> 
                                            <td>$au->tanggal</td> 
                                            <td>
                                            ";
                                            ?>
                                                <audio preload='none' style='width:300px;' controls='controls'>
                                                    <source type='audio/mpeg' src='<?php echo base_url()?>assets/gallery/audio/<?php echo $au->audio?>' />
                                                </audio>
                                            </td> 
                                            <td>
                                                <a href="<?php echo base_url()?>index.php/dashboard/audio/delete/<?php echo $au->id_audio ?>">
                                                     <i class="fa fa-trash"></i> Delete
                                                </a>
                                            </td> 
                                        </tr> 
                                    </center>
                                        <?php
                                $no++;
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
</div>

<?php $this->load->view('dashboard/v_footer_dashboard'); ?>