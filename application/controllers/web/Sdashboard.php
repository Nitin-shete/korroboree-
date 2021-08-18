<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sdashboard extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
       
        $this->load->helper('form','url');
		$this->load->library('form_validation','upload','session');
        
        //  $this->load->library(array('form_validation','session'));
        //  $this->load->helper(array('url','html','form'));
        $this->load->model('web/Home_web_model');
		
        $this->load->database();
        


 
    }
	

    
public function my_account()
	{
	    $this->load->view('web/header');
    	$this->load->view('web/sdashboard/my_account');
    	$this->load->view('web/footer');

	}
    public function shop_item()
    {
        $this->load->view('web/header');
        $this->load->view('web/sdashboard/shop_item');
        $this->load->view('web/footer');

    }
    public function return()
    {
        $this->load->view('web/header');
        $this->load->view('web/sdashboard/return');
        $this->load->view('web/footer');

    }
    public function review_rating()
    {
        $this->load->view('web/header');
        $this->load->view('web/sdashboard/review_rating');
        $this->load->view('web/footer');

    }
    public function order_history()
    {
        $this->load->view('web/header');
        $this->load->view('web/sdashboard/order_history');
        $this->load->view('web/footer');

    }
    public function modify_address()
    {
        $this->load->view('web/header');
        $this->load->view('web/sdashboard/modify_address');
        $this->load->view('web/footer');

    }
    public function change_password()
    {
        $this->load->view('web/header');
        $this->load->view('web/sdashboard/change_password');
        $this->load->view('web/footer');

    }
    public function account_info()
    {
        $this->load->view('web/header');
        $this->load->view('web/sdashboard/account_info');
        $this->load->view('web/footer');

    }
    public function newsletter()
    {
        $this->load->view('web/header');
        $this->load->view('web/sdashboard/newsletter');
        $this->load->view('web/footer');

    }

 public function signup_process()
    {


         $data = array(
                 
                'uname'=>$this->input->post('username'),
                'email'=>$this->input->post('email'),
                'phone'=>$this->input->post('mnumber'),
                'password'=>$this->input->post('password'),
                'cpassword'=>$this->input->post('cpassword'),
                'address'=>$this->input->post('address'),
                 'referral_code'=>$this->input->post('rcode'),);

        
            // print_r($data);
           $d= $this->Home_web_model->insert_user($data);
           if($d){
            redirect('signin');
          }
          else{
           redirect('signup');
           }
    }
    //   $this->session->set_userdata($user);



    public function signin_process(){	
		$email=$this->input->post('email');
		$password=$this->input->post('password');
			
		$data=$this->Home_web_model->signin($email,$password);

        //  print_r($data);
           if(empty($data)){
			$this->session->set_flashdata('error','Invalid Username or password');
		    redirect('signin');
		}
		    if($data->num_rows() >0){
                $this->session->set_flashdata("success","You are logged in");
                redirect('Home');
            }
                  
          
				 	
			 }
				 
			
		} 
		







		

