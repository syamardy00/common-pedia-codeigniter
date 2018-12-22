<?php
	Class Artikel extends CI_Controller{

		function __construct(){
			parent::__construct();

			$this->load->model('m_data');
			$this->load->library('upload');
		}

		function index(){
			$data['p_artikel'] = $this->m_data->get_data_sort('artikel', 'dilihat');
			$data['kategori'] = $this->m_data->get_data('kategori')->result();
			$data['user'] = $this->m_data->get_data('user')->result();
			$data['artikel'] = $this->m_data->get_data_artikel('artikel')->result();
			$this->load->view('artikel/v_artikel', $data);
		}


		function baca_artikel(){
			$data['p_artikel'] = $this->m_data->get_data_sort('artikel', 'dilihat');
			$data['user'] = $this->m_data->get_data('user')->result();
		 	$data['kategori'] = $this->m_data->get_data('kategori')->result();
			$slug = array('slug' =>  $this->uri->segment(3));
			$data['artikel'] = $this->m_data->get_where('artikel', $slug);
			$this->m_data->update_dilihat($slug);
  			$this->load->view('artikel/v_baca_artikel', $data);
		}
	}
?>