<?php
	Class Artikel extends CI_Controller{

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
			$data['artikel'] = $this->m_data->get_Where('artikel',$where);
			$data['kategori'] = $this->m_data->get_data('kategori')->result();
			$this->load->view('dashboard/artikel/v_artikel', $data);
		}

		function add_artikel(){
			$id_user = $this->session->userdata('id_user'); //-----------------------------------GANTI
			$where = array('id_user' => $id_user);
			$data['user'] = $this->m_data->get_where('user', $where);
			$data['kategori'] = $this->m_data->get_data('kategori')->result();
			$this->load->view('dashboard/artikel/v_add_artikel', $data);
		}

		function aksi_simpan(){
			$config['upload_path'] = './assets/foto/artikel/'; //path folder
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	        $config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload
	 
	        $this->upload->initialize($config);
	        if(!empty($_FILES['foto']['name'])){
	            if ($this->upload->do_upload('foto')){
	                $gbr = $this->upload->data();
	                //Compress Image
	                $config['image_library']='gd2';
	                $config['source_image']='./assets/foto/artikel/'.$gbr['file_name'];
	                $config['create_thumb']= FALSE;
	                $config['maintain_ratio']= FALSE;
	                $config['quality']= '60%';
	                $config['width']= 710;
	                $config['height']= 420;
	                $config['new_image']= './assets/foto/artikel/'.$gbr['file_name'];
	                $this->load->library('image_lib', $config);
	                $this->image_lib->resize();
	 
	                $gambar=$gbr['file_name']; //ambil nama file yang terupload enkripsi
	                $id_user = $this->session->userdata('id_user'); //----------------------------------------GANTIIIIIII
	                $id_kategori=$this->input->post('id_kategori');
	                $judul=$this->input->post('judul');
	                $isi=$this->input->post('isi');
	                $dilihat=0;
	 
	                //Buat slug
	                $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '', $judul); //filter karakter unik dan replace dengan kosong ('')
	                $trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
	                $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
	                $slug=$pre_slug.'.html'; // tambahkan ektensi .html pada slug
	 				
	 				date_default_timezone_set('Asia/Jakarta');
	 				$tanggal = date('Y-m-d H:i:s');
	 				$data = array(
	 					'id_user' => $id_user,
	 					'id_kategori' => $id_kategori,
	 					'judul' => $judul,
	 					'isi' => $isi,
	 					'foto' => $gambar,
	 					'slug' => $slug,
	 					'tanggal_post' => $tanggal,
	 					'dilihat' => $dilihat
	 				);


	                $this->m_data->add_data('artikel', $data); //simpan artikel ke database
	                $url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Berhasil Disimpan!');
	            		document.location='$url/index.php/dashboard/artikel'
						</script>";
	                //redirect('index.php/dashboard/artikel');

	            }else{
	            	$url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Gagal Disimpan!');
	            		document.location='$url/index.php/dashboard/artikel/add_artikel'
						</script>";
	                //redirect ke blog jika gambar gagal upload
	                //redirect('index.php/dashboard/artikel/add_artikel');
	                // echo "gagal upload";
	            }
	                      
	        }else{
	        	$url=base_url();
	 			echo "<script languange='javascript'>
            		alert('Gagal Disimpan!');
            		document.location='$url/index.php/dashboard/artikel/add_artikel'
					</script>";
	            //redirect ke blog jika gambar kosong
	        	//echo "gagal upload gambar kosong";
	            //redirect('index.php/dashboard/artikel/add_artikel');
	        }       
		}

		function edit_artikel(){
			if(isset($_POST['aksi'])){
				$id_user = $this->session->userdata('id_user'); //------------------------------------------GANTIIIIIII
                $id_kategori=$this->input->post('id_kategori');
                $judul=$this->input->post('judul');
                $isi=$this->input->post('isi');
                $dilihat=0;
                date_default_timezone_set('Asia/Jakarta');
	 			$tanggal = date('Y-m-d H:i:s');

	            $where = array('id_artikel' => $this->input->post('id_artikel'));

	            $config['upload_path'] = './assets/foto/artikel/'; //path folder
		        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		        $config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload
		 
		        $this->upload->initialize($config);
		        if(!empty($_FILES['foto']['name'])){
		            if ($this->upload->do_upload('foto')){
		                $gbr = $this->upload->data();
		                //Compress Image
		                $config['image_library']='gd2';
		                $config['source_image']='./assets/foto/artikel/'.$gbr['file_name'];
		                $config['create_thumb']= FALSE;
		                $config['maintain_ratio']= FALSE;
		                $config['quality']= '60%';
		                $config['width']= 710;
		                $config['height']= 420;
		                $config['new_image']= './assets/foto/artikel/'.$gbr['file_name'];
		                $this->load->library('image_lib', $config);
		                $this->image_lib->resize();
		 
		                $gambar=$gbr['file_name']; //ambil nama file yang terupload enkripsi
		 
		                //Buat slug
		                $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '', $judul); //filter karakter unik dan replace dengan kosong ('')
		                $trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
		                $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
		                $slug=$pre_slug.'.html'; // tambahkan ektensi .html pada slug

		 				
		 				$data = array(
		 					'id_kategori' => $id_kategori,
		 					'judul' => $judul,
		 					'isi' => $isi,
		 					'foto' => $gambar,
		 					'slug' => $slug,
		 					'tanggal_post' => $tanggal,
		 					'dilihat' => $dilihat
		 				);


		                $this->m_data->update_data('artikel', $where, $data); //simpan artikel ke database
		                $url=base_url();
		 				echo "<script languange='javascript'>
	            		alert('Berhasil Disimpan!');
	            		document.location='$url/index.php/dashboard/artikel'
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
		        	$id_kategori=$this->input->post('id_kategori');
	                $judul=$this->input->post('judul');
	                $isi=$this->input->post('isi');
	                $dilihat=0;
	                date_default_timezone_set('Asia/Jakarta');
	 				$tanggal = date('Y-m-d H:i:s');

		        	$string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '', $judul); //filter karakter unik dan replace dengan kosong ('')
		            $trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
		            $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
		            $slug=$pre_slug.'.html'; // tambahkan ektensi .html pada slug
		            $data = array(
		 					'id_kategori' => $id_kategori,
		 					'judul' => $judul,
		 					'isi' => $isi,
		 					'slug' => $slug,
		 					'tanggal_post' => $tanggal,
		 					'dilihat' => $dilihat
		 				);
		 			$this->m_data->update_data('artikel', $where, $data); //simpan artikel ke database
		 			$url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Berhasil Disimpan!');
	            		document.location='$url/index.php/dashboard/artikel'
						</script>";
		            //redirect('index.php/dashboard/artikel');
		        } 
		            
	        }else{
	        	$id_user = $this->session->userdata('id_user'); //------------------------GANTI
				$where = array('id_user' => $id_user);
				$data['user'] = $this->m_data->get_where('user', $where);
				$data['kategori'] = $this->m_data->get_data('kategori')->result();
	            $slug = array('slug' =>  $this->uri->segment(4));
	            $data['artikel'] = $this->m_data->get_where('artikel', $slug);
	            $this->load->view('dashboard/artikel/v_edit_artikel',$data);
	        }
		}

		function delete_artikel($id){
			$where = array('id_artikel' => $id);
			$this->m_data->delete_data('artikel', $where);
			$url=base_url();
 			echo "<script languange='javascript'>
        		alert('Berhasil Dihapus!');
        		document.location='$url/index.php/dashboard/artikel'
				</script>";
		}
	}
?>