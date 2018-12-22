<?php
    Class Video extends CI_Controller{

        function __construct(){
            parent::__construct();

            $this->load->model('m_data');
            $this->load->library('upload');
        }

        function index(){
            $data['user'] = $this->m_data->get_data('user')->result();
            // $data['artikel'] = $this->m_data->get_data_artikel('artikel')->result();
            $data['video'] = $this->m_data->get_data_image('video', 'id_video');
            $this->load->view('video/v_video', $data);
        }
    }
?>