<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video_j extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/d_team/Home_model');
        $this->load->helper('form','url');
		$this->load->library('form_validation','upload');
		// $this->load->model('Home_model');
		
        $this->load->database();


    }
	

    


	public function index()
	{ 
		
    	$this->load->view('journal_video/index');
	}

	public function intro()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/intro');
	}

	public function seg1()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg1');
	}

	public function seg2()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg2');
	}
	public function seg3()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg3');
	}
	public function seg4()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg4');
	}
	public function seg5()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg5');
	}
	public function seg6()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg6');
	}
	public function seg7()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg7');
	}

	public function seg8()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg8');
	}
	public function seg9()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg9');
	}
	public function seg10()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg10');
	}
	public function seg11()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg11');
	}
	public function seg12()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg12');
	}
	public function seg13()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg13');
	}
	public function seg14()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/seg14');
	}
	

  public function quet1()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet1');
	}
public function quet2()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet2');
	}
public function quet3()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet3');
	}

	public function quet4()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet4');
	}
	public function quet5()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet5');
	}
	
	public function quet6()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet6');
	}
	public function quet7()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet7');
	}
	public function quet8()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet8');
	}
	public function quet9()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet9');
	}
	public function quet10()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet10');
	}
	public function quet11()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet11');
	}
	public function quet12()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet12');
	}
	public function quet13()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet13');
	}

public function quet14()
	{ 
	$this->load->view('journal_video/header');
    $this->load->view('journal_video/quet14');
	}

 }