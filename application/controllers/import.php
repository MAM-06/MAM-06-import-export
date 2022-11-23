<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Import extends CI_Controller {

        public function index()
        {
            $this->load->helper('url');
            $data['title'] = 'Import Excel';
            $data['mahasiswa'] = $this->db->get('mahasiswa')->result();
            $this->load->view('import/index', $data);
        }

        public function create()
        {
            $this->load->helper('url');
            $data['title'] = "Upload File Excel";
            $this->load->view('import/create', $data);
        }

        public function excel()
        {
            if(isset($_FILES["file"]["name"])){
                  // upload
                $file_tmp = $_FILES['file']['tmp_name'];
                $file_name = $_FILES['file']['name'];
                $file_size =$_FILES['file']['size'];
                $file_type=$_FILES['file']['type'];
                // move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads
                
                $object = PHPExcel_IOFactory::load($file_tmp);
        
                foreach($object->getWorksheetIterator() as $worksheet){
        
                    $highestRow = $worksheet->getHighestRow();
                    $highestColumn = $worksheet->getHighestColumn();
        
                    for($row=4; $row<=$highestRow; $row++){
        
                        $nim = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                        $nama = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                        $angkatan = $worksheet->getCellByColumnAndRow(2, $row)->getValue();

                        $data[] = array(
                            'nim'          => $nim,
                            'nama'          =>$nama,
                            'angkatan'         =>$angkatan,
                        );
        
                    } 
        
                }
        
                $this->db->insert_batch('mahasiswa', $data);
        
                $message = array(
                    'message'=>'<div class="alert alert-success">Import file excel berhasil disimpan di database</div>',
                );
                
                $this->session->set_flashdata($message);
                redirect('import');
            }
            else
            {
                 $message = array(
                    'message'=>'<div class="alert alert-danger">Import file gagal, coba lagi</div>',
                );
                
                $this->session->set_flashdata($message);
                redirect('import');
            }
        }

    }