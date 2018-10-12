<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class evaluasi extends MX_Controller {

    function __construct() {
        parent::__construct();
          
        //Load IgnitedDatatables Library
        $this->load->library(array('Datatables'));
        $this->load->model('evaluasi_model','evaluasidb',TRUE);
        $this->load->helper(array('form','url'));
        $this->session->set_userdata('lihat','evaluasi');
        if ( !$this->ion_auth->logged_in()): 
            redirect('auth/login', 'refresh');
        endif;
    }

    public function index() {
        $this->template->set_title('Kelola Evaluasi');
        $this->template->set_layout('default');
        $this->template->add_js('var baseurl="'.base_url().'evaluasi/";','embed');  
        $this->template->add_js('modules/evaluasi.js');
        $this->template->add_js('modules/crud.min.js');
        $this->template->add_js('plugins/interface/datatables.min.js');
        $this->template->add_js('modules/datatables-setup.min.js');
        
        $this->ckeditor();
        $this->template->load_view('evaluasi_view',array(
                        'title'=>'Kelola Data Evaluasi',
                        'subtitle'=>'Pengelolaan Evaluasi',
                        'breadcrumb'=>array(
                            'Evaluasi'),
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
        $this->datatables->select('id_evaluasi,id_siswa,prestasi,keaktifan,kehadiran,datetime,')
                        ->from('evaluasi');
        echo $this->datatables->generate();
    }

   

    public function get($id_evaluasi=null){
        if($id_evaluasi!==null){
            echo json_encode($this->evaluasidb->get_one($id_evaluasi));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('id_evaluasi')){
            $this->evaluasidb->update($this->input->post('id_evaluasi'));
          }else{
            $this->evaluasidb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('id_evaluasi')){
                $this->evaluasidb->update($this->input->post('id_evaluasi'));
              }else{
                $this->evaluasidb->save();
              }
          }
        }
    }

    
    public function delete(){
        if(isset($_POST['ajax'])){
            if(!empty($_POST['id'])){
                $this->evaluasidb->delete($this->input->post('id'));
                $this->session->set_flashdata('notif','Succeed, Data Has Deleted');
            }else {
                $this->session->set_flashdata('notif', 'Failed! No Data Deleted');
            }
        }
    }
    

}

/** Module evaluasi Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
