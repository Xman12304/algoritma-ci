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

            //bilangan prima murni 
            for($i=2;$i<=50;$i++){
            $count = 0;
                for($j=2;$j<=50;$j++){
                if($i%$j == 0){
                    $count++;
                    }
                }
                if($count == 1){
                    $hasil[] = $i;
                }           
            }
            $data['hasil'] = $hasil;
            $this->load->view('bilanganprima', $data);
        }
    
    }
    
    /* End of file Algoritma.php */
    
?>