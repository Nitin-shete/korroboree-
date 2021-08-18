<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
       
        $this->load->helper('form','url');
		$this->load->library('form_validation','upload');
		
        $this->load->database();

 
    }
	

    
public function index()
	{
	    $this->load->view('web/header');
    	$this->load->view('web/home');
    	$this->load->view('web/footer');

	}

public function  parent()
{
	    $this->load->view('web/header');
    	$this->load->view('web/parent');
    	$this->load->view('web/footer');

	}

    public function  parent_video()
{
        // $this->load->view('web/header');
        $this->load->view('web/parent_video');
        // $this->load->view('web/footer');

    }
	public function student()
{
	    $this->load->view('web/header');
    	$this->load->view('web/student');
    	$this->load->view('web/footer');

	}
    public function student_video()
    {
        // $this->load->view('web/header');
        $this->load->view('web/student_video');
        // $this->load->view('web/footer');

    }
	public function  teacher()
     {
	    $this->load->view('web/header');
    	$this->load->view('web/teacher');
    	$this->load->view('web/footer');

	}
public function  teacher_video()
     {
        // $this->load->view('web/header');
        $this->load->view('web/teacher_video');
        // $this->load->view('web/footer');

    }

	public function sign_up()
    {
    	$this->load->view('web/sign_up');
    	$this->load->view('web/footer');


	}
	public function signin()
    {
	 
    	$this->load->view('web/signin');
    // $this->load->view('web/footer');

    	

	}
public function ar_bio()
    {
	     $this->load->view('web/header');
    	$this->load->view('web/ar_bio');
    	$this->load->view('web/footer');

	}
public function lina_bio()
    {
	     $this->load->view('web/header');
    	$this->load->view('web/lina_bio');
    	$this->load->view('web/footer');

	}

	public function terms_conditions()
    {
	     $this->load->view('web/header');
    	$this->load->view('web/terms_conditions');
    	$this->load->view('web/footer');

	}
	public function privacy_policy()
    {
	     $this->load->view('web/header');
    	$this->load->view('web/privacy_policy');
    	$this->load->view('web/footer');

	}
	public function contact()
    {
	     $this->load->view('web/header');
    	$this->load->view('web/contact');
    	$this->load->view('web/footer');

	}

	public function cart()
    {
	     // $this->load->view('web/header');
    	$this->load->view('web/cart');
    	// $this->load->view('web/footer');

	}



}