<?php
	Class Video extends CI_Controller{

		function __construct(){
			parent::__construct();

			if($this->session->userdata('status') != "logged"){
				redirect('index.php/user/login');
			}

			$this->load->model('m_data');
			$this->load->library('upload');

		}

		function index(){
			$id_user = $this->session->userdata('id_user'); //-----------------------------------------------------------------GANTI
			$where = array('id_user' => $id_user);
			$data['user'] = $this->m_data->get_where('user', $where);
			$data['video'] = $this->m_data->get_where('video', $where);
			$this->load->view('dashboard/video/v_video', $data);
		}

		function aksi_simpan(){
			if (isset($_FILES['video']['name']) && $_FILES['video']['name'] != '') {
		        unset($config);
		        $date = date("ymd");
		        $configVideo['upload_path'] = './assets/gallery/video/';
		        $configVideo['max_size'] = '600000';
		        $configVideo['allowed_types'] = 'avi|flv|wmv|mp4';
		        $configVideo['overwrite'] = FALSE;
		        $configVideo['encrypt_name'] = TRUE;
		        $configVideo['remove_spaces'] = TRUE;
		        $video_name = $date.$_FILES['video']['name'];
		        $configVideo['file_name'] = $video_name;

		        $this->load->library('upload', $configVideo);
		        $this->upload->initialize($configVideo);
		        if(!$this->upload->do_upload('video')) {
		            echo $this->upload->display_errors();
		        }else{
		            $videoDetails = $this->upload->data();
		            $data['video_name']= $configVideo['file_name'];
		            $data['video_detail'] = $videoDetails;

		            $judul_video = $this->input->post('judul_video');
		            $id_user = $this->session->userdata('id_user');
		            date_default_timezone_set('Asia/Jakarta');
	 				$tanggal = date('Y-m-d');

		            $data = array(
		            	'judul_video' => $judul_video,
		            	'video' => $videoDetails['file_name'],
		            	'tanggal' => $tanggal,
		            	'id_user' => $id_user
		            );

		            $this->m_data->add_data('video', $data);

		            $url=base_url();
		 			echo "<script languange='javascript'>
		        		alert('Berhasil Disimpan!');
		        		document.location='$url/index.php/dashboard/video'
						</script>";
				        }

		    }else{
		        echo "Please select a file";
		    }
		}

		function delete($id){
			$where = array('id_video' => $id);
			$this->m_data->delete_data('video', $where);
			$url=base_url();
 			echo "<script languange='javascript'>
        		alert('Berhasil Dihapus!');
        		document.location='$url/index.php/dashboard/video'
				</script>";
		}

	}
?>