<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Slideshow extends CI_Model
{

    public function getRows($id = ''){
        $this->db->select('id,file_name,created');
        $this->db->from('slideshow');
        if($id){
            $this->db->where('id',$id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('created','desc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }

    public function insert($data = array()){
        $insert = $this->db->insert_batch('slideshow',$data);
        return $insert?true:false;
    }

    public function remove($id){
        $delete = $this->db->where('id', $id);
        $this->db->delete('slideshow');
        return $delete?true:false;
    }
}

?>