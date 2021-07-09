 
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class D_team extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/d_team/Home_model');
        $this->load->helper('form','url');
		$this->load->library('form_validation','upload');
		$this->load->model('Home_model');
		
        $this->load->database();
    }
	

    


	public function index()
	{ 
		
    	$this->load->view('admin/d_team/index');
	}

	public function dashboard()
	{   		$this->load->view('admin/d_team/header');
		        $this->load->view('admin/d_team/dashboard');
				$this->load->view('admin/d_team/footer');

	}
	public function video_journal()
	{ 
		$data['v']=$this->Home_model->fetch_video_journal();
		$this->load->view('admin/d_team/header');
        $this->load->view('admin/d_team/v_journal_dashboard',$data);
		$this->load->view('admin/d_team/footer');

	}


   public function adminlogin(){	
		$username=$this->input->post('username');
		$password=$this->input->post('password');
			
		$data=$this->Home_model->login_val($username,$password);

           if(empty($data)){
			$this->session->set_flashdata('error','Invalid Username or password');
		    redirect('admin');
		}
		    if($data->num_rows() >0){
          $userdata=$data->row_array();
         $id  =  $userdata['id'];
         $adminname =  $userdata['username'];
         $admintype =  $userdata['user_type'];

         $sesdata = array(
            'id'  => $id,
            'adminname'     => $adminname,
            'admintype'     => $admintype,
            'logged_in' => TRUE
        );

        $this->session->set_userdata($sesdata);

				if ($admintype =="5d") {
			
              redirect('admin/v5/dashboard');

				 	
				 } elseif($admintype=="kr") {
                   redirect('admin/dashboard');
                   
				 	
				 }
				 
			
		} 
		
		
	}


    public function logout(){

		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect('admin');
	
	}
	public function video_episod(){


		   $id= $this->input->post('id');
		   // print_r($id);
		  $data['v']=$this->Home_model->video_journal_single($id);


		$this->load->view('admin/d_team/header');
		$this->load->view('admin/d_team/video_episode',$data);
		$this->load->view('admin/d_team/footer');


	}
	public function upload_file($file_name)
    {
        $upload_path1 = "uploads/";
        $config1['upload_path'] = $upload_path1;
        $config1['allowed_types'] = '*';
        $config1['max_size'] = "3000";
        $img_name1 = strtolower($_FILES[$file_name]['name']);
        $img_name1 = preg_replace('/[^a-zA-Z0-9\.]/', "_", $img_name1);
        $config1['file_name'] = date("YmdHis") . rand(0, 9999999) . "_" . $img_name1;
        $this->load->library('upload', $config1);
        $this->upload->initialize($config1);
        $this->upload->do_upload($file_name);
        $fileDetailArray1=$this->upload->data();
        return $fileDetailArray1['file_name'];
    }


    public function video_creat(){
    			$this->load->view('admin/d_team/header');
                $this->load->view('admin/d_team/video_creat');
                $this->load->view('admin/d_team/footer');


	}

public function set_upload_options()
	{ 
	// upload an image options
	$this->load->library('upload');

		   $config = array();
		   $config['upload_path'] = 'uploads/'; //give the path to upload the image in folder
		   $config['remove_spaces']=TRUE;
		   $config['encrypt_name'] = TRUE; // for encrypting the name
		   $config['allowed_types'] ='*';
		   $config['max_size'] = '78000';
		   $config['overwrite'] = FALSE;
		   return $config;
	}

	public function  video_journal_add(){
			if ($_FILES['interviewee_image']['name'] != '') { // input  file  name ex: image_desti
		            $interviewee_image= $this->upload_file('interviewee_image');
		        } else {

		            $interviewee_image = "empty";
		        }


		    	
				   $files = $_FILES;
				   $cpt = count($_FILES['inner_image']['name']);
					for($i=0; $i<$cpt; $i++){
					$_FILES['inner_image']['name']= $files['inner_image']['name'][$i];
					$_FILES['inner_image']['type']= $files['inner_image']['type'][$i];
					$_FILES['inner_image']['tmp_name']= $files['inner_image']['tmp_name'][$i];
					$_FILES['inner_image']['error']= $files['inner_image']['error'][$i];
					$_FILES['inner_image']['size']= $files['inner_image']['size'][$i];
					$this->upload->initialize($this->set_upload_options());
					$this->upload->do_upload();
					$fileName = $_FILES['inner_image']['name'];
					$images[] = $fileName; 
				}
				
				 $fileName = implode(',',$images);
				

				$s_title =implode(",",$this->input->post('segment_title'));
		// print_r($fileName);die;

			    $data = array(
					'interviewee_name'=>$this->input->post('interviewee_name'),
					 'interviewee_image'=> $interviewee_image,
					 'segment_no'=>$this->input->post('segment_no'),
					 'segment_titles'=>$s_title,
					  'c_date'=>$this->input->post('date'),
					 'storyboard_file'=> $fileName,
					 

			   );
				unset($data['submit']);                             
		         $this->load->model('Home_model');
				$this->Home_model->saverecords($data);
				redirect("admin/video_journal");


	}







}





