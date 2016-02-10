<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('ipl_matchs');
    }

    public function index() {


        $this->load->view('welcome_message');
    }

    public function get_matchs() {

        $date = $this->input->post('date_picker', TRUE);


        $teams = array();
        $temp_teams = array();
        $matchs = array();

        $teams = $this->ipl_matchs->get_teams();


        foreach ($teams as $value):

            $temp_teams[$value['team_city']] = $value['team_name'];

        endforeach;

        foreach ($temp_teams as $key => $value) :

            foreach ($teams as $val):

                if ($value != $val['team_name']):

                    $matchs['matchs'][$key][] = $value . ' x ' . $val['team_name'];

                endif;

            endforeach;

        endforeach;


        foreach ($matchs['matchs'] as $key => $item) :

            for ($i = 0; $i <= 6; $i++):
                $temp[] = $item[$i];
            endfor;
        endforeach;

        for ($i = 0; $i < 30; $i++) {
            $timestamp = strtotime($date);
            $tm = 86400 * $i; // 60 * 60 * 24 = 86400 = 1 day in seconds
            $tm = $timestamp + $tm;

            $the_date[$i] = date("m/d/Y", $tm);
            $the_days[$i] = date('D', strtotime($the_date[$i]));
        
        }
        echo "<pre>";
        echo __line__ . '</br>';
        print_r($the_days);
        echo "</pre>";
        echo "<pre>";
        echo __line__ . '</br>';
        print_r($the_date);
        echo "</pre>";
       
        
        foreach($the_days as $key1=>$value1):
           
            foreach($the_date as $key2=>$value2):
                echo "<pre>";
                echo __line__ . '</br>';
                print_r($value2);
                echo "</pre>";
                die();
            if($key1 == $key2):
                $final[$value2] = $value1;
                endif;
            endforeach;
            
        endforeach;
        
        echo "<pre>";
        echo __line__ . '</br>';
        print_r($final);
     
        echo "</pre>";
        die();
        echo "<pre>";
        echo __line__ . '</br>';
        shuffle($temp);
        print_r($temp);
        echo "</pre>";
        die();
    }

}
