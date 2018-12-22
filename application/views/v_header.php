<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Common-Pedia</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/style.css" type="text/css" media="all" />
    <script defer src="<?php echo base_url() ?>assets/front/svg-with-js/js/fontawesome-all.js"></script>
    <link href='//fonts.googleapis.com/css?family=Oregano' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="header">
        <div class="wrap">
            <div class="logo">
                <h1>
                    <a href="<?php echo base_url() ?>">Common-Pedia</a>
                </h1>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a href="<?php echo base_url() ?>">Artikel</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/image') ?>">Image Gallery</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/audio') ?>">Audio Gallery</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/video') ?>">Video Gallery</a>
                    </li>
                        <?php if($this->session->userdata('status') == 'logged'){
                            ?> 
                                <li><a href="<?php echo base_url('index.php/dashboard/profil') ?>">Dashboard</a></li>
                                <li><a href="<?php echo base_url('index.php/user/logout') ?>">Logout</a></li>
                            <?php
                        }else{
                        ?>
                        <li><a href="<?php echo base_url('index.php/user/login') ?>">Login</a></li>
                        <?php
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="wrap">

        <div class="box">
            <img src="<?php echo base_url() ?>assets/front/images/mac.png">
            <h2>Welcome to Common-Pedia</h2>
            <p>Common-Pedia adalah sebuah website yang memungkinkan pengguna untuk saling berbagi artikel, Posting artikel kamu,
             edit artikel kaum dan bagikan ke teman temanmu...</p>
            <div class="clear"></div>
        </div>