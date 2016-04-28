<?php
//Pics.php

class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
                $this->load->helper('url_helper');
                $this->load->helper('url');
        }

        public function index()
        {
                $data['pics'] = $this->pics_model->get_pics();
                $data['page_id'] = "Trending pics";
                $data['title'] = 'Trending Nature Pics';

                $this->load->view('pics/index', $data);
        }

        public function view($slug = NULL)
        {
                $data['pics'] = $this->pics_model->get_pics($slug);
                $data['page_id'] = $slug . ' Pics';
                $data['title'] = $slug . ' Pics';
            

                $this->load->view('pics/view', $data);
            
        }
    
}

