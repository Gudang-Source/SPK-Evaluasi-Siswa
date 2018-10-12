<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class siswa extends MX_Controller {

    function __construct() {
        parent::__construct();
          
        //Load IgnitedDatatables Library
        $this->load->library(array('Datatables'));
        $this->load->model('siswa_model','siswadb',TRUE);
        $this->load->helper(array('form','url'));
        $this->session->set_userdata('lihat','siswa');
        if ( !$this->ion_auth->logged_in()): 
            redirect('auth/login', 'refresh');
        endif;
    }

    public function index() {
        $this->template->set_title('Kelola Siswa');
        $this->template->set_layout('default');
        $this->template->add_js('var baseurl="'.base_url().'siswa/";','embed');  
        $this->template->add_js('modules/siswa.js');
        $this->template->add_js('modules/crud.min.js');
        $this->template->add_js('plugins/interface/datatables.min.js');
        $this->template->add_js('modules/datatables-setup.min.js');
        
        $this->ckeditor();
        $this->template->load_view('siswa_view',array(
                        'title'=>'Kelola Data Siswa',
                        'subtitle'=>'Pengelolaan Siswa',
                        'breadcrumb'=>array(
                            'Siswa'),
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
        $this->datatables->select('id_siswa,nama_siswa,id_kelas,j_kelamin,alamat,telp,datetime,')
                        ->from('siswa');
        echo $this->datatables->generate();
    }

   

    public function get($id_siswa=null){
        if($id_siswa!==null){
            echo json_encode($this->siswadb->get_one($id_siswa));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('id_siswa')){
            $this->siswadb->update($this->input->post('id_siswa'));
          }else{
            $this->siswadb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('id_siswa')){
                $this->siswadb->update($this->input->post('id_siswa'));
              }else{
                $this->siswadb->save();
              }
          }
        }
    }

    
    public function delete(){
        if(isset($_POST['ajax'])){
            if(!empty($_POST['id'])){
                $this->siswadb->delete($this->input->post('id'));
                $this->session->set_flashdata('notif','Succeed, Data Has Deleted');
            }else {
                $this->session->set_flashdata('notif', 'Failed! No Data Deleted');
            }
        }
    }
    

    public function getdatatables(){
        $this->datatables->select('nim,nama_siswa,id_kelas,j_kelamin,alamat,telp,datetime,')
                        ->from('siswa');
        echo $this->datatables->generate();
    }

   

    public function get($nim=null){
        if($nim!==null){
            echo json_encode($this->siswadb->get_one($nim));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('nim')){
            $this->siswadb->update($this->input->post('nim'));
          }else{
            $this->siswadb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('nim')){
                $this->siswadb->update($this->input->post('nim'));
              }else{
                $this->siswadb->save();
              }
          }
        }
    }

    
    public function delete(){
        if(isset($_POST['ajax'])){
            if(!empty($_POST['id'])){
                $this->siswadb->delete($this->input->post('id'));
                $this->session->set_flashdata('notif','Succeed, Data Has Deleted');
            }else {
                $this->session->set_flashdata('notif', 'Failed! No Data Deleted');
            }
        }
    }
    

}

/** Module siswa Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
