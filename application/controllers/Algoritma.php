<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Algoritma extends CI_Controller {
    
        //method index
        public function index()
        {
            $this->load->view('dashboard_view');
        }

        //method ganjil genap
        public function ganjilgenap(){
            $nilai = 10;

            if($nilai %2 == 0){
                $hasil = "Genap";
            }else{
                $hasil = "Ganjil";
            }

            //return $hasil;
            $data = ['hasil' => $hasil];
            $this->load->view('GanjilGenap', $data);
            
        }

        public function inputganjilgenap(){
            $nilai = $this->input->post('nilai');

            if(empty($nilai)){
            $hasil = "0";
            }else if($nilai %2 == 0){
                $hasil = "Genap";
            }else if($nilai %2 == 1){
                $hasil = "Ganjil";
            }else{
                $hasil = "0";
            }

            $data = ['hasil' => $hasil];
            $this->load->view('GanjilGenap', $data);
        }

        public function bilanganprima(){

            for($i=1 ; $i<=50; $i++){
                if($i/1 == $i && $i/$i == 1){
                    $hasil = $i."bilangan prima";
                }else{
                    $hasil = $i."bukan prima";
                }
            }

            $data = array('hasil' => $hasil);
            $this->load->view('bilanganprima', $data);
        }
    
    }
    
    /* End of file Algoritma.php */
    
?>