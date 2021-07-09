
<?php defined('BASEPATH') OR exit('No direct script access allowed');


class D_user_model extends CI_model{

function __construct(){
        parent::__construct();
        $this->load->database();
    }


  public function fetch_video_journal()
                	{    		
                	  $this->db->select("*");
                    $this->db->from('video_journal_create');
                    // $this->db->order_by('id','ASC');
                    $query = $this->db->get();
                    if ($query->num_rows()>0) {
                        return $query->result();
                    } else {
                        return false;
                    }
                  
                
                }

                	

  public function video_journal_single($id){



                    $this->db->select("*");
                    $this->db->from('video_journal_create');
                     $this->db->where('id',$id);
                    $query = $this->db->get();
                    if ($query->num_rows()>0) {
                        return $query->result();
                    } else {
                        return false;
                    }

  }



   
}
 ?>