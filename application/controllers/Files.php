<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Files extends CI_Controller {
		
	public function __construct() {
		parent::__construct();
		//$this->user_level = $this->Login_model->is_logged();
		
	}
	
	public function index() {
	   $this->load_dir();
	}
	
	public function do_public_upload() {
	    $path = '././assets/uploads/uploads_public';
	    $config['upload_path']          = $path;
	    //$config['allowed_types']        = 'pdf|docx|pptx|odt';
	    $config['max_size']             = 10000;
	    $config['allowed_types']        = '*';
	    
	    $this->load->library('upload', $config);
	    $this->load->helper('directory');
	    	    
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    if ( !$this->upload->do_upload('userfile')) {
	        $data['error'] = array('error' => $this->upload->display_errors());
	        $data['private'] = $this->Login_model->is_logged();
	        $files = $this->Files_model->get_files();
	        $data['files_private'] = $files['private'];
	        $data['files_public'] = $files['public'];
	        $this->load->view('files/files_view', $data);
	    }
	    else {
	        $data['error'] = NULL;
	        $data['private'] = $this->Login_model->is_logged();
	        $files = $this->Files_model->get_files();
	        $data['files'] = $files;
	        $data['path'] = $path;
	        $this->Files_model->add_file($data);
	        $data['files_private'] = $files['private'];
	        $data['files_public'] = $files['public'];
	        $this->load->view('files/files_view', $data);
	    }
	    $this->load->view('template/footer_ver1');
	}
	
	public function do_private_upload() {
	    $path = $this->Files_model->get_dir();
	    $new_dir = $this->input->post('newdir');
	    if($new_dir != '') {
	        $path = $this->Files_model->make_dir_priv($path, $new_dir);
	    }	    
	    $config['upload_path']          = $path;
	    //$config['allowed_types']        = 'pdf|docx|pptx|odt';
	    $config['max_size']             = 10000;
	    $config['allowed_types']        = '*';  
	    
	    $this->load->library('upload', $config);
	    $this->load->helper('directory');
	    
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    if ( ! $this->upload->do_upload('userfile'))
	    {
	        $data['error'] = array('error' => $this->upload->display_errors());
	        $data['dir'] = $this->Files_model->get_dir();
	        $data['private'] = TRUE;
	        $files = $this->Files_model->get_files();
	        $data['files_private'] = $files['private'];
	        $data['files_public'] = $files['public'];
	        $this->load->view('files/files_view', $data);
	    }
	    else
	    {
	        $data['description'] = $this->input->post('filedesc');
	        $data['newdir'] = $this->input->post('newdir');	
	        $data['error'] = NULL;
	        $data['private'] = TRUE;
	        $files = $this->Files_model->get_files();
	        $data['files'] = $files;
	        $data['path'] = $path;
	        $this->Files_model->add_file($data);
	        $data['files_private'] = $files['private'];
	        $data['files_public'] = $files['public'];
	        $this->load->view('files/files_view', $data);
	    }
	    $this->load->view('template/footer_ver1');
	}
	
	public function load_dir() {
	    if($this->Login_model->is_logged()['logged']) {
	        $this->load->view('template/header_public_gen', array('logged' => TRUE));
	        $data['private'] = TRUE;
	    }
	    else {
	        $this->load->view('template/header_public_gen', array('logged' => FALSE));
	        $data['private'] = FALSE;
	    }
	    $data['error'] = NULL;
	    $files = $this->Files_model->get_files();
	    $data['files_private'] = $files['private'];
	    //$data['files_public'] = $files['public'];
	    $files_dir = $this->Files_model->list_files($files['public_dir']);
	    //echo 'dir: ' . $files_dir['dir'] . '<br>';
	    //echo 'strlen: ' . strlen($files_dir['dir']);
	    //$data['files_link'] = $files_dir['files_link'];
	    $data['cur_dir'] = $files_dir['cur_dir'];
	    $data['prev_link'] = $files_dir['prev_link'];
	    $data['home'] = $files_dir['home'];
	    $data['dirs'] = $files_dir['dirs'];
	    $data['link'] = $files_dir['link'];
	    $data['files_public'] = $files_dir['files'];
	    $data['private_dir'] = $files['private_dir'];
	    $data['public_dir'] = $files['public_dir'];
	    $this->load->view('files/files_view', $data);
	    $this->load->view('template/footer_ver1');
	}
	
	public function save_file() {
	    
	        header('Content-Description: File Transfer');
	        header('Content-Type: application/octet-stream');
	        header('Content-Disposition: attachment; filename="'.basename($file).'"');
	        header('Expires: 0');
	        header('Cache-Control: must-revalidate');
	        header('Pragma: public');
	        header('Content-Length: ' . filesize($file));
	        readfile($file);
	}
	
	public function download_file() {	    
	    $this->Files_model->download_file($this->uri->segment(3, 0), $this->uri->segment(4, 0));
	    echo '<br><br>here';
	    //redirect(base_url());
	}
	
	public function delete_file() {
	    $this->Files_model->delete_file($this->uri->segment(3, 0), $this->uri->segment(4, 0));
	    $this->load_dir();
	}
	
	public function get_dir() {	
	    $dir = $this->uri->segment(3, 0);
	    $dir = str_replace('~', '/', $dir);
	    $dir .= '/';
	    $files_dir = $this->Files_model->list_files('././assets/uploads/uploads_public/' . $dir);
	    //echo 'dir: ' . $files_dir['dir'] . '<br>';
	    //echo 'strlen: ' . strlen($files_dir['dir']) . '<br>';
	    //echo 'cur dir: ' . $files_dir['cur_dir'];
	    $data['link'] = $files_dir['link'];
	    $data['prev_link'] = $files_dir['prev_link'];
	    //$data['files_link'] = $files_dir['files_link'];
	    $data['cur_dir'] = $files_dir['cur_dir'];
	    $data['dirs'] = $files_dir['dirs'];
	    $data['files_public'] = $files_dir['files'];
	    $data['home'] = $files_dir['home'];
	    $files = $this->Files_model->get_files();	    
	    $data['files_private'] = $files['private'];
	    $data['error'] = NULL;
	    $data['private_dir'] = $files['private_dir'];
	    $data['public_dir'] = $files['public_dir'];
	    $data['private'] = FALSE;
	    $this->load->view('template/header_public_gen', array('logged' => FALSE));
	    $this->load->view('files/files_view', $data);
	    $this->load->view('template/footer_ver1');
	}
	
	public function download_pub() {
	    
	    $file = $this->uri->segment(3, 0);
	    $file = str_replace('~', '/', $file);
	    $file  = '././assets/uploads/uploads_public/' . $file;
	    //echo 'file: ' . $file;
	    $this->Files_model->download_pub($file);
	    //redirect(base_url() . 'index.php/files');
	}
}