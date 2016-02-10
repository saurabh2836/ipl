<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ipl_matchs
 *
 * @author saurabh2836
 */
class Ipl_matchs  extends CI_Model{
    //put your code here
    
    
    public function get_teams() {
        
        $data= $this->db->get('team')->result_array();
        
        return $data;
    }
}
