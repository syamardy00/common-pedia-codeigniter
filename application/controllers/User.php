<?php
	Class User extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('m_data');
			$this->load->library('upload');
		}

		// function index(){
		// 	$data['user'] = $this->m_data->get_data('user')->result();
		// 	$data['artikel'] = $this->m_data->get_data('artikel')->result();
		// 	$data['kategori'] = $this->m_data->get_data('kategori')->result();
		// 	$this->load->view('dashboard/artikel/v_artikel', $data);
		// }

		function login(){
			if(isset($_POST['aksi'])){
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$where = array(
					'username' => $username,
					'password' => md5($password)
					);
				$data = $this->m_data->get_where("user", $where);
				$cek = $this->m_data->login("user",$where);
				if($cek > 0){
		 
					$data_session = array(
						'username' => $username,
						'id_user' => $data[0]->id_user,
						'status' => "logged"
						);
		 
					$this->session->set_userdata($data_session);
		 
					redirect('index.php/dashboard/profil');
		 
				}else{
					$url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Username Atau Password Salah!');
	            		javascript:history.go(-1);
						</script>";
				}

			}else{
				if($this->session->userdata('status') == "logged"){
					redirect('index.php/dashboard/profil');
				}
				$this->load->view('user/v_login');
			}
		}

		function logout(){
			$this->session->sess_destroy();
			redirect('index.php/artikel');
		}

		function aksi_register(){
			if(isset($_POST['aksi'])){
				$username=$this->input->post('username');
				$password=md5($this->input->post('password'));
                $nama_lengkap=$this->input->post('nama_lengkap');
                $tgl_lahir=$this->input->post('tgl_lahir');
                $jenis_kelamin=$this->input->post('jenis_kelamin');
                $email=$this->input->post('email');
                $bio=$this->input->post('bio');
                $agama=$this->input->post('agama');
                $no_tlp=$this->input->post('no_tlp');

	            $config['upload_path'] = './assets/foto/profil/'; //path folder
		        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		        $config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload
		 
		        $this->upload->initialize($config);
		        if(!empty($_FILES['foto']['name'])){
		            if ($this->upload->do_upload('foto')){
		                $gbr = $this->upload->data();
		                //Compress Image
		                $config['image_library']='gd2';
		                $config['source_image']='./assets/foto/profil/'.$gbr['file_name'];
		                $config['create_thumb']= FALSE;
		                $config['maintain_ratio']= FALSE;
		                $config['quality']= '60%';
		                $config['width']= 500;
		                $config['height']= 500;
		                $config['new_image']= './assets/foto/profil/'.$gbr['file_name'];
		                $this->load->library('image_lib', $config);
		                $this->image_lib->resize();
		 
		                $gambar=$gbr['file_name']; //ambil nama file yang terupload enkripsi
		 				
		 				$data = array(
		 					'username' => $username,
		 					'password' => $password,
		 					'nama_lengkap' => $nama_lengkap,
		 					'tgl_lahir' => $tgl_lahir,
		 					'jenis_kelamin' => $jenis_kelamin,
		 					'email' => $email,
		 					'bio' => $bio,
		 					'agama' => $agama,
		 					'no_tlp' => $no_tlp,
		 					'foto' => $gambar
		 				);


		                $this->m_data->add_data('user', $data); //simpan artikel ke database
		                $url=base_url();
		 				echo "<script languange='javascript'>
	            		alert('Berhasil Terdaftar!');
	            		javascript:history.go(-1);
						</script>";
		                //redirect('index.php/dashboard/artikel');
		            }else{
		            $url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Gagal Disimpan!');
	            		javascript:history.go(-1);
						</script>";
		                //redirect('index.php/dashboard/artikel/edit_artikel');
		                // echo "gagal upload";
		            }             
		        }else{
		        	$url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Gagal Disimpan hoe hoeee!');
	            		javascript:history.go(-1);
						</script>";
		        }      
	        }else{
	        	$url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Gagal Disimpan hoe hoeee 22!');
	            		javascript:history.go(-1);
						</script>";
	        }
		}
	}
?>