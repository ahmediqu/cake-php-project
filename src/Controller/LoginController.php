<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use memisdal\memisdal;
use commoncls\commoncls;
use App\Model\Entity;
use Cake\Routing\Router;

class LoginController extends AppController
{
    public $ls;
    public $tbl_users;

    public function initialize()
    {
        parent::initialize();
        ini_set('max_execution_time', 300);
      //  $this->ls = new memisdal();
        $this->tbl_users = TableRegistry::getTableLocator()->get('Users');
    }
    public function index()
    {
        $this->layout="login";
        /*        $session = $this->getRequest()->getSession();
        $this->viewBuilder()->setLayout('Login');
        if ($this->request->is('post')) {
            $param_list=array();
            array_push($param_list,$this->request->getData('Username'));            
            array_push($param_list,1);
            $result = $this->ls->getDataByProc('AUTH_SA_USER_BY_ID_GET',$param_list);

            if (count($result) > 0 && (new commoncls())->checkPasswordHashes($this->request->getData('Password'), $result[0]['USER_PWD'])) 
            {
                $param_list=array();
                array_push($param_list,$result[0]['USER_ID']);
                $user_role_map = $this->ls->getDataByProc('AUTH_SA_USER_ROLE_MAP_GET',$param_list);
                $logon_param_list=array();
                array_push($logon_param_list,$result[0]['USER_ID']);
                array_push($logon_param_list,$this->request->clientIp());
                array_push($logon_param_list,2);
                $logon_result = $this->ls->getDataByProc('AUTH_USER_LOGON_INSERT',$logon_param_list);

                $menu_list = $this->ls->getDataByProc("SYS_MENU_INFO_GET_BY_ROLEID", array($result[0]['USER_ID'],0,1));
                $session->write('menu_info_1', $menu_list);
                $session->write('role_info_1', $user_role_map);
                $session->write('user_id', $result[0]['USER_ID']);
                $session->write('oa_logon_no', $logon_result[0]['LOGON_ID']);
                $session->write('user_name', $result[0]['USER_NAME']);
                $session->write('user_full_name', $result[0]['USER_FULL_NAME']);
                $session->write('user_type', $result[0]['USER_TYPE']);
                $session->write('user_can_edit', $result[0]['CAN_EDIT']);
                $session->write('user_can_approve', $result[0]['CAN_APPROVE']);
                $session->write('first_time', $result[0]['FIRST_TIME']);                  
                $session->write('baseUrl', Router::url('/', true));
                $session->write('rptorfrm', 'form');

                $session->write('bu_id', $result[0]['F_BU_ID']);





                return $this->redirect('/' . $menu_list[0]['CONTROLLER'] . '/' . $menu_list[0]['ACTION']);

            } 
            else 
            {
                   $this->Flash->success('Username or password is incorrect');
            }
        }
        else
        {

        }*/
        if($this->request->is('post')){
           // $this->render('dummy');
            // $this->render('/' . 'finance' . '/' . 'index');
          //  return $this->redirect('/finance/index');
            return $this->redirect('/pd/dashboard');
        }
    }

     function logout() {

        /*$session = $this->getRequest()->getSession();
        $logon_param_list=array();        
        array_push($logon_param_list,$session->read('oa_logon_no'));        
        $logon_result = $this->ls->getDataByProc('AUTH_USER_LOGON_UPDATE',$logon_param_list);


        $session->destroy();        
        $session->delete('menu_info_1');
        $session->delete('role_info_1');
        $session->delete('user_id');
        $session->delete('oa_logon_no');        
        $session->delete('permitted_menus');
        $session->delete('user_name');
        $session->delete('menu_info');
        $session->delete('user_full_name');
        $session->delete('user_type');
        $session->delete('user_can_edit');
        $session->delete('user_can_approve');
        $session->delete('first_time');
        $session->delete('baseUrl');
        $session->delete('rptorfrm');*/
       // return $this->redirect($this->Auth->logout());
        // $this->render('/' . 'login' . '/' . 'index');
         return $this->redirect('/login/index');
    }
/*
    function forgotpassword()
    {
        if ($this->request->is('post'))
        {
            $session = $this->getRequest()->getSession();
            $fp_step = $this->request->getData('FP_STEP');
            if (intval($fp_step) === 0)
            {
                $country_code = $this->request->getData('COUNTRY_CODE');
                $mobile_no = $this->request->getData('MOBILE_NO');
                if ($mobile_no != '' && strlen($mobile_no) === 10)
                {
                    $result = $this->ls->getDataByProc('AUTH_SA_USER_IS_VALID',[$mobile_no,1]);
                    $user_id = $result[0]['USER_ID'];
                    if ($user_id > 0)
                    {
                        $otp = mt_rand(111111, 999999);
                        $smsText = "Your One-Time Password (OTP) for password recovery is " . $otp . " This OTP will be valid only for the next page. MEMIS Online Application System";                
                        $response = (new commoncls())->sendSMS($country_code.$mobile_no, $smsText);
                        if ($response == "OK")
                        {
                            $this->set('FP_STEP', 1);
                            $this->set('MOBILE_NO', $mobile_no);
                            $session->write('fp_'.$mobile_no, $otp);
                            $session->write('fp_'.$mobile_no.$otp,$user_id);
                        }
                        else
                        {
                            $this->Flash->error('There is something wrong. Please try again!');
                        }
                    }
                    else
                    {
                        $this->Flash->error('There is no such valid user with this mobile number. Please try again!');
                    }
                }
                else
                {
                    $this->Flash->error('Invalid Mobile Number. Please try again!');
                }
            }
            else if (intval($fp_step) === 1)
            {
                $mobile_no = $this->request->getData('MOBILE_NO');
                $fp_otp = $this->request->getData('FP_OTP');
                $check_otp = $session->read('fp_'.$mobile_no);
                if ($fp_otp == $check_otp)
                {
                    $user_id = $session->read('fp_'.$mobile_no.$fp_otp);
                    $reset_password = \Cake\Utility\Security::randomString(6);
                    $reset_password_hashed = (new commoncls())->getHashedPassword($reset_password);
                    $result = $this->ls->getDataByProc('AUTH_SA_USER_RESET_PASSWORD',[$user_id,$reset_password_hashed]);
                    $reset_user_id = $result[0]['PWD_RESET'];
                    if ($reset_user_id > 0)
                    {
                        $smsText = "Your New Password is " . $reset_password . ". MEMIS Online Application System";                
                        $response = (new commoncls())->sendSMS('880'.$mobile_no, $smsText);
                        if ($response == "OK")
                        {
                            $this->set('FP_STEP', 2);
                            $session->destroy();        
                            $session->delete('fp_'.$mobile_no);        
                            $session->delete('fp_'.$mobile_no.$fp_otp);
                            $this->Flash->success('Password has been reset successfully and sent to your mobile number');
                        }
                        else
                        {
                            $this->Flash->error('There is something wrong. Please try again!');
                        }  
                    }
                    else
                    {
                        $this->Flash->error('There is something wrong. Please try again!');
                    }
                }
            }
        }
        else
        {
            $this->set('FP_STEP', 0);
        }
        $this->render();
    } */
    
}
?>