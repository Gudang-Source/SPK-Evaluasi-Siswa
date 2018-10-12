<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class users_groups extends MX_Controller {

    function __construct() {
        parent::__construct();
          
        //Load IgnitedDatatables Library
        $this->load->library(array('Datatables'));
        $this->load->model('users_groups_model','users_groupsdb',TRUE);
        $this->load->helper(array('form','url'));
        $this->session->set_userdata('lihat','users_groups');
        if ( !$this->ion_auth->logged_in()): 
            redirect('auth/login', 'refresh');
        endif;
    }

    public function index() {
        $this->template->set_title('Kelola Users_groups');
        $this->template->set_layout('default');
        $this->template->add_js('var baseurl="'.base_url().'users_groups/";','embed');  
        $this->template->add_js('modules/users_groups.js');
        $this->template->add_js('modules/crud.min.js');
        $this->template->add_js('plugins/interface/datatables.min.js');
        $this->template->add_js('modules/datatables-setup.min.js');
        
        $this->ckeditor();
        $this->template->load_view('users_groups_view',array(
                        'title'=>'Kelola Data Users_groups',
                        'subtitle'=>'Pengelolaan Users_groups',
                        'breadcrumb'=>array(
                            'Users_groups'),
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
        $this->datatables->select('id,user_id,group_id,')
                        ->from('users_groups');
        echo $this->datatables->generate();
    }

   

    public function get($id=null){
        if($id!==null){
            echo json_encode($this->users_groupsdb->get_one($id));
        }
    }

    public function submit(){
        if ($this->input->post('ajax')){
          if ($this->input->post('id')){
            $this->users_groupsdb->update($this->input->post('id'));
          }else{
            $this->users_groupsdb->save();
          }

        }else{
          if ($this->input->post('submit')){
              if ($this->input->post('id')){
                $this->users_groupsdb->update($this->input->post('id'));
              }else{
                $this->users_groupsdb->save();
              }
          }
        }
    }

    
    public function delete(){
        if(isset($_POST['ajax'])){
            if(!empty($_POST['id'])){
                $this->users_groupsdb->delete($this->input->post('id'));
                $this->session->set_flashdata('notif','Succeed, Data Has Deleted');
            }else {
                $this->session->set_flashdata('notif', 'Failed! No Data Deleted');
            }
        }
    }
    

}

/** Module users_groups Controller **/
/** Build & Development By Syahroni Wahyu - roniwahyu@gmail.com */
