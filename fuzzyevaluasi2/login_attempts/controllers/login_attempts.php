<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class login_attempts extends MX_Controller {

    function __construct() {
        parent::__construct();
          
        //Load IgnitedDatatables Library
        $this->load->library(array('Datatables'));
        $this->load->model('login_attempts_model','login_attemptsdb',TRUE);
        $this->load->helper(array('form','url'));
        $this->session->set_userdata('lihat','login_attempts');
        if ( !$this->ion_auth->logged_in()): 
            redirect('auth/login', 'refresh');
        endif;
    }

    public function index() {
        $this->template->set_title('Kelola Login_attempts');
        $this->template->set_layout('default');
        $this->template->add_js('var baseurl="'.base_url().'login_attempts/";','embed');  
        $this->template->add_js('modules/login_attempts.js');
        $this->template->add_js('modules/crud.min.js');
        $this->template->add_js('plugins/interface/datatables.min.js');
        $this->template->add_js('modules/datatables-setup.min.js');
        
        $this->ckeditor();
        $this->template->load_view('login_attempts_view',array(
                        'title'=>'Kelola Data Login_attempts',
                        'subtitle'=>'Pengelolaan Login_attempts',
                        'breadcrumb'=>array(
                            'Login_attempts'),
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
        $this->datatables->select('id,ip_address,login,time,')
                        ->from('login_attempts');
        echo $this->datatables->generate();
    }

   

    public function get($id=null){
        if($id!==null){
            echo json_encode($this->login_attemptsdb->get_one($id));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('id')){
            $this->login_attemptsdb->update($this->input->post('id'));
          }else{
            $this->login_attemptsdb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('id')){
                $this->login_attemptsdb->update($this->input->post('id'));
              }else{
                $this->login_attemptsdb->save();
              }
          }
        }
    }

    
    public function delete(){
        if(isset($_POST['ajax'])){
            if(!empty($_POST['id'])){
                $this->login_attemptsdb->delete($this->input->post('id'));
                $this->session->set_flashdata('notif','Succeed, Data Has Deleted');
            }else {
                $this->session->set_flashdata('notif', 'Failed! No Data Deleted');
            }
        }
    }
    

}

/** Module login_attempts Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
