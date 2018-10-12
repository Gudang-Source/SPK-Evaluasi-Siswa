<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class rules extends MX_Controller {

    function __construct() {
        parent::__construct();
          
        //Load IgnitedDatatables Library
        $this->load->library(array('Datatables'));
        $this->load->model('rules_model','rulesdb',TRUE);
        $this->load->helper(array('form','url'));
        $this->session->set_userdata('lihat','rules');
        if ( !$this->ion_auth->logged_in()): 
            redirect('auth/login', 'refresh');
        endif;
    }

    public function index() {
        $this->template->set_title('Kelola Rules');
        $this->template->set_layout('default');
        $this->template->add_js('var baseurl="'.base_url().'rules/";','embed');  
        $this->template->add_js('modules/rules.js');
        $this->template->add_js('modules/crud.min.js');
        $this->template->add_js('plugins/interface/datatables.min.js');
        $this->template->add_js('modules/datatables-setup.min.js');
        
        $this->ckeditor();
        $this->template->load_view('rules_view',array(
                        'title'=>'Kelola Data Rules',
                        'subtitle'=>'Pengelolaan Rules',
                        'breadcrumb'=>array(
                            'Rules'),
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
        $this->datatables->select('rule_id,rulename,prestasi,kegiatan,kehadiran,fuzzy_output,datetime,')
                        ->from('rules');
        echo $this->datatables->generate();
    }

   

    public function get($rule_id=null){
        if($rule_id!==null){
            echo json_encode($this->rulesdb->get_one($rule_id));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('rule_id')){
            $this->rulesdb->update($this->input->post('rule_id'));
          }else{
            $this->rulesdb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('rule_id')){
                $this->rulesdb->update($this->input->post('rule_id'));
              }else{
                $this->rulesdb->save();
              }
          }
        }
    }

    
    public function delete(){
        if(isset($_POST['ajax'])){
            if(!empty($_POST['id'])){
                $this->rulesdb->delete($this->input->post('id'));
                $this->session->set_flashdata('notif','Succeed, Data Has Deleted');
            }else {
                $this->session->set_flashdata('notif', 'Failed! No Data Deleted');
            }
        }
    }
    

}

/** Module rules Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
