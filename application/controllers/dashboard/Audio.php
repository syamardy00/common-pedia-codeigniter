<?php
	Class Audio extends CI_Controller{

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
			$data['audio'] = $this->m_data->get_where('audio', $where);
			$this->load->view('dashboard/audio/v_audio', $data);
		}

		function aksi_simpan(){
			if (isset($_FILES['audio']['name']) && $_FILES['audio']['name'] != '') {
		        unset($config);
		        $date = date("ymd");
		        $configaudio['upload_path'] = './assets/gallery/audio/';
		        $configaudio['max_size'] = '600000';
		        $configaudio['allowed_types'] = 'mp3';
		        $configaudio['overwrite'] = FALSE;
		        $configaudio['encrypt_name'] = TRUE;
		        $configaudio['remove_spaces'] = TRUE;
		        $audio_name = $date.$_FILES['audio']['name'];
		        $configaudio['file_name'] = $audio_name;

		        $this->load->library('upload', $configaudio);
		        $this->upload->initialize($configaudio);
		        if(!$this->upload->do_upload('audio')) {
		            echo $this->upload->display_errors();
		        }else{
		            $audioDetails = $this->upload->data();
		            $data['audio_name']= $configaudio['file_name'];
		            $data['audio_detail'] = $audioDetails;

		            $judul_audio = $this->input->post('judul_audio');
		            $id_user = $this->session->userdata('id_user');
		            date_default_timezone_set('Asia/Jakarta');
	 				$tanggal = date('Y-m-d');

		            $data = array(
		            	'judul_audio' => $judul_audio,
		            	'audio' => $audioDetails['file_name'],
		            	'tanggal' => $tanggal,
		            	'id_user' => $id_user
		            );

		            $this->m_data->add_data('audio', $data);

		            $url=base_url();
		 			echo "<script languange='javascript'>
		        		alert('Berhasil Disimpan!');
		        		document.location='$url/index.php/dashboard/audio'
						</script>";
				        }

		    }else{
		        echo "Please select a file";
		    }
		}

		function delete($id){
			$where = array('id_audio' => $id);
			$this->m_data->delete_data('audio', $where);
			$url=base_url();
 			echo "<script languange='javascript'>
        		alert('Berhasil Dihapus!');
        		document.location='$url/index.php/dashboard/audio'
				</script>";
		}

	}
?>