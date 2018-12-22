<div class="sidebar" style="float: right;">
            <div class="right-box">
                <h2>Popular Article</h2>
                <ul>
                    <?php
                        if(is_array($p_artikel)){
                            foreach ($p_artikel as $p) {
                                ?> <li>
                                    <a href='<?php echo base_url()?>index.php/artikel/baca_artikel/<?php echo $p->slug ?>'>
                                        <?php echo $p->judul ?>
                                    </a>
                                    </li>
                                <?php
                            }
                        }
                    ?>
                </ul>
                <h2>Categories</h2>
                <ul>
                    <?php
                        if(is_array($kategori)){
                            foreach ($kategori as $kat) {
                                echo "<li>
                                    <a href='#''>$kat->nama_kategori</a>
                                    </li>";
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    </div>
    <div class="footer">
        <div class="wrap">
            <div class="clear"></div>
            <div class="copy">
                <p>&copy; 2018 Common-Pedia. All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</body>

</html>