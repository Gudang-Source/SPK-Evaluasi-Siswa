<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class walikelas extends MX_Controller {

    function __construct() {
        parent::__construct();
          
        //Load IgnitedDatatables Library
        $this->load->library(array('Datatables'));
        $this->load->model('walikelas_model','walikelasdb',TRUE);
        $this->load->helper(array('form','url'));
        $this->session->set_userdata('lihat','walikelas');
        if ( !$this->ion_auth->logged_in()): 
            redirect('auth/login', 'refresh');
        endif;
    }

    public function index() {
        $this->template->set_title('Kelola Walikelas');
        $this->template->set_layout('default');
        $this->template->add_js('var baseurl="'.base_url().'walikelas/";','embed');  
        $this->template->add_js('modules/walikelas.js');
        $this->template->add_js('modules/crud.min.js');
        $this->template->add_js('plugins/interface/datatables.min.js');
        $this->template->add_js('modules/datatables-setup.min.js');
        
        $this->ckeditor();
        $this->template->load_view('walikelas_view',array(
                        'title'=>'Kelola Data Walikelas',
                        'subtitle'=>'Pengelolaan Walikelas',
                        'breadcrumb'=>array(
                            'Walikelas'),
                        ));
        
    }
     
    public function ckeditor(){
        session_start();
            $_SESSION['KCFINDER']=array();
            $_SESSION['kcfinder'] = FALSE;
            $_SESSION['KCFINDER']['disabled'] = false;
            $_SESSION['KCFINDER']['uploadURL'] = "../uploads";
            // $this->template->load_view('ckeditor/admin');

    }
    //<!-- Start Primary Key -->
    

    public function getdatatables(){
        $this->datatables->select('id_walikelas,nik_walikelas,nama_walikelas,jab_fungsional,guru_matpel,datetime,')
                        ->from('walikelas');
        echo $this->datatables->generate();
    }

   

    public function get($id_walikelas=null){
        if($id_walikelas!==null){
            echo json_encode($this->walikelasdb->get_one($id_walikelas));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('id_walikelas')){
            $this->walikelasdb->update($this->input->post('id_walikelas'));
          }else{
            $this->walikelasdb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('id_walikelas')){
                $this->walikelasdb->update($this->input->post('id_walikelas'));
              }else{
                $this->walikelasdb->save();
              }
          }
        }
    }

    
    public function delete(){
        if(isset($_POST['ajax'])){
            if(!empty($_POST['id'])){
                $this->walikelasdb->delete($this->input->post('id'));
                $this->session->set_flashdata('notif','Succeed, Data Has Deleted');
            }else {
                $this->session->set_flashdata('notif', 'Failed! No Data Deleted');
            }
        }
    }
    

}

/** Module walikelas Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
