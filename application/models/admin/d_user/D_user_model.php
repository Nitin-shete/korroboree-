
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

  

   public function video_segment_save1($data){


         $this->db->insert('video_segment_1',$data);
         $id=$this->db->insert_id();
          return $id;
                    }

//quetion  

   public function video_segment_save2($data2){


            $this->db->insert('video_segment_2',$data2);
            $question_id=$this->db->insert_id();
            return $question_id;
                    }

  public function video_segment_save3($data3){

            $this->db->insert('video_segment_3',$data3);
            return true;
                    }






// public function fetch_video_segment($id){

// $this->db->select('*');    
// $this->db->from('video_segment_1');
//  $this->db->where('video_journal_id',$id);
// $this->db->join('video_segment_2', 'video_segment_1.id = video_segment_2.v_segment_id');
// $this->db->join('video_segment_3', 'video_segment_2.id = video_segment_3.question_id');
// $query = $this->db->get();
// if ($query->num_rows()>0) {
//                         return $query->result();
//                     } else {
//                         return false;
//                     }
// }



public function fetch_video_segment_single($id){
$this->db->select('*');    
$this->db->from('video_segment_1');
 $this->db->where('video_journal_id',$id);
$query = $this->db->get();
if ($query->num_rows()>0) {
                        return $query->result();
                    } else {
                        return false;
                    }

}


function delete_video_segment($id)
{
//   $this->db->from("video_segment_1");
//   $this->db->where("video_segment_1.id", $id);
// $this->db->where("video_segment_2", "video_segment_1.id = video_segment_2.v_segment_id");
// $this->db->where('video_segment_3', 'video_segment_2.id = video_segment_3.question_id');
// $this->db->delete("video_segment_1","video_segment_2","video_segment_3");

     $this->db->select('*');
    $this->db->from('video_segment_1');
    $this->db->join('video_segment_2','video_segment_1.id = video_segment_2.v_segment_id');
    $this->db->join('video_segment_3','video_segment_2.id = video_segment_3.question_id');
    $this->db->where("video_segment_1.id", $id);
    $this->db->delete('video_segment_1', 'video_segment_2 ','video_segment_3');
    return true;
}

function delete_video_s($id)
{
    $this->db->from('video_segment_1');
     $this->db->where("video_segment_1.id", $id);
     $this->db->delete('video_segment_1');
     return true;


}


}