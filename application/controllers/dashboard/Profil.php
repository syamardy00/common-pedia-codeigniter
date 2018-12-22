<?php
	Class Profil extends CI_Controller{

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
			$this->load->view('dashboard/profil/v_profil', $data);
		}

		function aksi_edit(){
			if(isset($_POST['aksi'])){
                $nama_lengkap=$this->input->post('nama_lengkap');
                $tgl_lahir=$this->input->post('tgl_lahir');
                $jenis_kelamin=$this->input->post('jenis_kelamin');
                $email=$this->input->post('email');
                $bio=$this->input->post('bio');
                $agama=$this->input->post('agama');
                $no_tlp=$this->input->post('no_tlp');
                
	            $where = array('id_user' => $this->input->post('id_user'));

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
		 					'nama_lengkap' => $nama_lengkap,
		 					'tgl_lahir' => $tgl_lahir,
		 					'jenis_kelamin' => $jenis_kelamin,
		 					'email' => $email,
		 					'bio' => $bio,
		 					'agama' => $agama,
		 					'no_tlp' => $no_tlp,
		 					'foto' => $gambar
		 				);


		                $this->m_data->update_data('user', $where, $data); //simpan artikel ke database
		                $url=base_url();
		 				echo "<script languange='javascript'>
	            		alert('Berhasil Disimpan!');
	            		document.location='$url/index.php/dashboard/profil'
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
		            $data = array(
		 					'nama_lengkap' => $nama_lengkap,
		 					'tgl_lahir' => $tgl_lahir,
		 					'jenis_kelamin' => $jenis_kelamin,
		 					'email' => $email,
		 					'bio' => $bio,
		 					'agama' => $agama,
		 					'no_tlp' => $no_tlp
		 			);

		 			$this->m_data->update_data('user', $where, $data); //simpan artikel ke database
		 			$url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Berhasil Disimpan!');
	            		document.location='$url/index.php/dashboard/profil'
						</script>";
		            //redirect('index.php/dashboard/artikel');
		        }       
	        }
		}

		function ganti_password(){
			$id_user = $this->session->userdata('id_user');
			$pass = $this->input->post('password');
			$password_baru = $this->input->post('password_baru');

			$where = array('id_user' => $id_user, 'password' => md5($pass));
			$cek_pass = $this->m_data->login('user', $where);

			if($cek_pass > 0){
				$data = array('id_user' => $id_user, 'password' => md5($password_baru));
				$this->m_data->update_data('user', $where, $data);
				echo "<script languange='javascript'>
	            		alert('Berhasil Diubah!');
	            		javascript:history.go(-1);
						</script>";
			}else{
				echo "<script languange='javascript'>
	            		alert('Gagal Diubah!');
	            		javascript:history.go(-1);
						</script>";
			}
		}
	}
?>