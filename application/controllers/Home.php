<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function index(){
        $indo   = json_decode(file_get_contents('https://data.covid19.go.id/public/api/update.json'),true);
        $prov   = json_decode(file_get_contents('https://data.covid19.go.id/public/api/prov.json'),true);
        $data = array(
                    'title' => 'Perkembangan Covid di Indonesia',
                    'indo'  => $indo,
                    'prov'  => $prov['list_data'],
                    
                    
                    

        );
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('home',$data);
        $this->load->view('templates/footer');
    }

    public function global(){
        $data = array(
            'title' => 'Perkembangan Covid Global',

         );
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('global',$data);
            $this->load->view('templates/footer');

    }

    public function kec(){

        $indo   = json_decode(file_get_contents('https://data.covid19.go.id/public/api/update.json'),true);
        $kec   = json_decode(file_get_contents('https://data.covid19.go.id/public/api/kecamatan_rawan.json'),true);
        $data = array(
            'title' => 'Perkembangan Covid di Indonesia',
            'indo'  => $indo,
            'kec'   => $kec,

         );
            $this->load->view('templates/header'); 
            $this->load->view('templates/sidebar');
           
            $this->load->view('kecamatan',$data);
            $this->load->view('templates/footer');
    }
    public function hospital(){
        // $config['base_url']     = site_url('home/hospital');
        // $config['total_rows']   = count($this->$rs);
        // $config['per_page']     = 10;
        // $config['uri_segment']  = 3;
        // $choice                 = $config["total_row"] /$config['per_page'];
        // $config["num_links"]    = floor($choice);
        
        // $this->pagination->initialize($config);
        // $data['page']   = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        // $data['pagination']     = $this->pagination->create_links();
        $indo   = json_decode(file_get_contents('https://data.covid19.go.id/public/api/update.json'),true);
        $rs   = json_decode(file_get_contents('https://data.covid19.go.id/public/api/rs.json'),true);
        $data = array(
            'title' => 'Perkembangan Covid di Indonesia',
            'indo'  => $indo,
            'rs'   => $rs,

         );
        
         
         $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('hospital',$data);
            $this->load->view('templates/footer');
    }

    public function lab() {
        $indo   = json_decode(file_get_contents('https://data.covid19.go.id/public/api/update.json'),true);
        $lab   = json_decode(file_get_contents('https://data.covid19.go.id/public/api/lab.json'),true);
        $data = array(
            'title' => 'Perkembangan Covid di Indonesia',
            'indo'  => $indo,
            'lab'   => $lab,

         );
         
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('lab',$data);
            $this->load->view('templates/footer');
    }

    public function pemetaan() {
        $lokasi   = json_decode(file_get_contents('https://covid19.mathdro.id/api/confirmed'),true);

        $data = array(
            'title'     => 'Pemetaan Covid-19 Global',  
            'lokasi'    => $lokasi,
        );

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pemetaan',$data);
        // $this->load->view('templates/footer');
    }
}
?>