
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class D_user extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
              $this->load->model('admin/d_user/D_user_model');
               $this->load->helper('form');
		$this->load->library('form_validation');
    }


 public function dashboard()
	{		$this->load->view('admin/d_user/header');
			$this->load->view('admin/d_user/dashboard');
			$this->load->view('admin/d_user/footer');
	}
	
 public function video_journal_dashboard()

	{	 $data['v']=$this->D_user_model->fetch_video_journal();	
		  $this->load->view('admin/d_user/header');
			$this->load->view('admin/d_user/video_journal_dashboard',$data);
			$this->load->view('admin/d_user/footer');
	}

public function episode_view()
	{	  
		  $id= $this->input->post('id');
		  $data['v']=$this->D_user_model->video_journal_single($id);	
		  $this->load->view('admin/d_user/header');
			$this->load->view('admin/d_user/episode_view',$data);
			$this->load->view('admin/d_user/footer');
	}
	
public function episode_create()
	{	
		 $id= $this->input->post('id');
		  $data['v']=$this->D_user_model->video_journal_single($id);	
		$this->load->view('admin/d_user/header');
			$this->load->view('admin/d_user/episode_create',$data);
			$this->load->view('admin/d_user/footer');
	}



public function episode_update()
	{		$this->load->view('admin/d_user/header');
			$this->load->view('admin/d_user/episode_update');
			$this->load->view('admin/d_user/footer');
	}




	

}





