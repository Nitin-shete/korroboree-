<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Slider_text extends CI_model{

function __construct(){
        parent::__construct();
        $this->load->database();
    }

public function intro_slider()
    {
    $this->db->select('*');
    $query=$this->db->get('web_intro_slider');
      return $query->result();
    }


  public function main_slider(){


    $this->db->select('*');
    $query=$this->db->get('web_main_slider');
    return $query->result();
  }    
  
  public function sub_slider(){
    $this->db->select('*');
    $this->db->join('web_main_slider','web_main_slider.id=web_sub_slider.main_slider_id');
    $query=$this->db->get('web_sub_slider');
    return $query->result();
  }    
  
  public function sub_slider_home(){
    $this->db->select('*');
    $this->db->where('main_slider_id','1');
    $query=$this->db->get('web_sub_slider');
    return $query->result();
  }    
  

}