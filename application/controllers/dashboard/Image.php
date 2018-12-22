<?php
	Class Image extends CI_Controller{

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
			$data['image'] = $this->m_data->get_where('image', $where);
			$this->load->view('dashboard/image/v_image', $data);
		}

		function aksi_simpan(){
			$config['upload_path'] = './assets/gallery/image/'; //path folder
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	        $config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload
	 
	        $this->upload->initialize($config);
	        if(!empty($_FILES['gambar']['name'])){
	            if ($this->upload->do_upload('gambar')){
	                $gbr = $this->upload->data();
	                //Compress Image
	                $config['image_library']='gd2';
	                $config['source_image']='./assets/gallery/image/'.$gbr['file_name'];
	                $config['create_thumb']= FALSE;
	                $config['maintain_ratio']= FALSE;
	                $config['quality']= '60%';
	                $config['width']= 350;
	                $config['height']= 350;
	                $config['new_image']= './assets/gallery/image/'.$gbr['file_name'];
	                $this->load->library('image_lib', $config);
	                $this->image_lib->resize();
	 
	                $gambar=$gbr['file_name']; //ambil nama file yang terupload enkripsi
	                $id_user = $this->session->userdata('id_user'); //----------------------------------------GANTIIIIIII
	                $caption=$this->input->post('caption');
	                date_default_timezone_set('Asia/Jakarta');
	 				$tanggal = date('Y-m-d');

	 				$data = array(
	 					'image' => $gambar,
	 					'caption' => $caption,
	 					'tanggal' => $tanggal,
	 					'id_user' => $id_user
	 				); 

	 				$this->m_data->add_data('image', $data); //simpan artikel ke database
	                $url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Berhasil Disimpan!');
	            		document.location='$url/index.php/dashboard/image'
						</script>";



	        	}else{
	            	$url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Gagal Disimpan!');
	            		document.location='$url/index.php/dashboard/image'
						</script>";
	                //redirect ke blog jika gambar gagal upload
	                //redirect('index.php/dashboard/artikel/add_artikel');
	                // echo "gagal upload";
	            }
	                      
	        }else{
	        	$url=base_url();
	 			echo "<script languange='javascript'>
            		alert('Gagal Disimpan!');
            		document.location='$url/index.php/dashboard/image'
					</script>";
	            //redirect ke blog jika gambar kosong
	        	//echo "gagal upload gambar kosong";
	            //redirect('index.php/dashboard/artikel/add_artikel');
	        }       
		}

		function delete($id){
			$where = array('id_image' => $id);
			$this->m_data->delete_data('image', $where);
			$url=base_url();
 			echo "<script languange='javascript'>
        		alert('Berhasil Dihapus!');
        		document.location='$url/index.php/dashboard/image'
				</script>";
		}

	}
?>