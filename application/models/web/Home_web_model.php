<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Home_web_model extends CI_model{

function __construct(){
        parent::__construct();
        $this->load->database();
    }

public function insert_user($data)
    {
    $d= $this->db->insert('users', $data);
    return $d;
    }


 public function signin($email,$password){
         $this->db->select("*");
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query=$this->db->get('users'); 
        if($query->num_rows()>0){
        return $query;

               }
              else{
                   return false;
                 } 
                 }






}