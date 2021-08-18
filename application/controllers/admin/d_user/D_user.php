
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class D_user extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
              $this->load->model('admin/d_user/D_user_model');
               $this->load->helper('form','url');
		     $this->load->library('form_validation');
		      $this->load->library('upload');

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
		  $data1['vs']=$this->D_user_model->fetch_video_segment_single($id);
		  // print_r($data1);	
	        $this->load->view('admin/d_user/header');
			$this->load->view('admin/d_user/episode_view',$data+$data1);
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

public function upload_file($file_name)
    {
           $upload_path1 = "uploads/video_segment";
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


    public function  video_segment_save(){

	if ($_FILES['s_video']['name'] != '') { 
		  $s_video= $this->upload_file('s_video');
		        } 
	 
 
		$data=array(
					
					'video_journal_id'=>$this->input->post('video_journal_id'),

					'page_title'=>$this->input->post('page_title'),
					'c_date'=>$this->input->post('date'),
					's_video'=>$s_video,
				    'custom_input'=>$this->input->post('custom_input'),
				    'clues'=>$this->input->post('clues'),

     	);


			$id= $this->D_user_model->video_segment_save1($data);

       
							$qt=$this->input->post('question_type');
							$nq=$this->input->post('no_question');
							$q=$this->input->post('question');

							 for ($i=0; $i <count($q) ; $i++) { 
							 	# code...
							 	$id;

					$data2=array(
					'v_segment_id'=>$id,
					'no_question'=>$nq[$i],
					'question'=>$q[$i],
					'question_type'=>$qt[$i],
					);
 						



     	       $question_id=$this->D_user_model->video_segment_save2($data2);
            
}
    	
     	       			// $question_id=$question_id;
     	       			$op=$this->input->post('option_title');
     	       			$at=$this->input->post('ans_type');
     	       			$no=$this->input->post('no_option');

     	       			

 								

                 for ($i=0; $i <count($op) ; $i++) { 
	# code...

     	       				$data3=array(

                    'question_id'=>$question_id,
     	     		// 'no_option'=>$no[$i],
					'option_title'=>$op[$i],
				    'ans_type'=>$at[$i],
				);

     	          	   $this->D_user_model->video_segment_save3($data3);
                       }

     	          	   redirect('admin/v5/video_journal');
     	     	     

 	}

  

  public function video_segment_delete(){

  $id=$this->input->post("id");

  // print_r("$id");

  	 // $a=$this->D_user_model->delete_video_segment($id);
       $this->D_user_model->delete_video_s($id);

  	 		redirect('admin/v5/video_journal');
  	 	}


	

}





