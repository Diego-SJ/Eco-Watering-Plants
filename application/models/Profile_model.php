<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile_model extends CI_Model {

    function getMyProfile($iduser){
        $this->db->where('iduser',$iduser);
        $query = $this->db->get("user");
        return $query->row();
    }

    function updateMyProfile($data,$iduser){
        $this->db->where("iduser",$iduser);
        return $this->db->update("user",$data);
    }
}