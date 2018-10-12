<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class kelas extends MX_Controller {

    function __construct() {
        parent::__construct();
          
        //Load IgnitedDatatables Library
        $this->load->library(array('Datatables'));
        $this->load->model('kelas_model','kelasdb',TRUE);
        $this->load->helper(array('form','url'));
        $this->session->set_userdata('lihat','kelas');
        if ( !$this->ion_auth->logged_in()): 
            redirect('auth/login', 'refresh');
        endif;
    }

    public function index() {
        $this->template->set_title('Kelola Kelas');
        $this->template->set_layout('default');
        $this->template->add_js('var baseurl="'.base_url().'kelas/";','embed');  
        $this->template->add_js('modules/kelas.js');
        $this->template->add_js('modules/crud.min.js');
        $this->template->add_js('plugins/interface/datatables.min.js');
        $this->template->add_js('modules/datatables-setup.min.js');
        
        $this->ckeditor();
        $this->template->load_view('kelas_view',array(
                        'title'=>'Kelola Data Kelas',
                        'subtitle'=>'Pengelolaan Kelas',
                        'breadcrumb'=>array(
                            'Kelas'),
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
        $this->datatables->select('id_kelas,nama_kelas,tingkatan,id_walikelas,datetime,')
                        ->from('kelas');
        echo $this->datatables->generate();
    }

   

    public function get($id_kelas=null){
        if($id_kelas!==null){
            echo json_encode($this->kelasdb->get_one($id_kelas));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('id_kelas')){
            $this->kelasdb->update($this->input->post('id_kelas'));
          }else{
            $this->kelasdb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('id_kelas')){
                $this->kelasdb->update($this->input->post('id_kelas'));
              }else{
                $this->kelasdb->save();
              }
          }
        }
    }

    
    public function delete(){
        if(isset($_POST['ajax'])){
            if(!empty($_POST['id'])){
                $this->kelasdb->delete($this->input->post('id'));
                $this->session->set_flashdata('notif','Succeed, Data Has Deleted');
            }else {
                $this->session->set_flashdata('notif', 'Failed! No Data Deleted');
            }
        }
    }
    

}

/** Module kelas Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
