<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Request extends CI_Controller
{
    function __construct()
    {
            parent::__construct();
            $this->load->library('session','form_validation');
            $this->load->helper('form');
    }
        /*Order-L
         *@Create date: 12/01/2015
         *@Method: index 
         *
         */
    public function index()
    {
        $this->load->view('requests/index');
        $dt = $this->session->userdata('data_input');

        if(!empty($dt))
        {
            $this->session->unset_userdata('data_input');
        }
    }
        
        /*Order-L
         *@Create date: 12/01/2015
         *@Method: input 
         *
         */
    public function inputL()
    {
        //set validation rules
        $this->form_validation->set_rules('domain_name', 'ドメイン名', 'required');
        $this->form_validation->set_rules('start_year', '開始年', 'required');
        $this->form_validation->set_rules('start_month', '開始月', 'required');
        $this->form_validation->set_rules('start_day', '開始日', 'required');
        $this->form_validation->set_rules('company_name', '企業名', 'required');
        $this->form_validation->set_rules('company_name_yomi', '企業名（よみ）', 'required');
        $this->form_validation->set_rules('zip_03', '郵便番号3', 'required|numeric');
        $this->form_validation->set_rules('zip_04', '郵便番号4', 'required|numeric');
        $this->form_validation->set_rules('address', '住所', 'required');
        $this->form_validation->set_rules('person_name', '担当者名', 'required');
        $this->form_validation->set_rules('person_name_yomi', '担当者名（よみ）', 'required');
        $this->form_validation->set_rules('tel', 'Tel', 'required');
        $this->form_validation->set_rules('email', 'メール', 'required|valid_email');
        $this->form_validation->set_rules('order_name', 'DP担当者', 'required');
        $this->form_validation->set_rules('order_email', 'DP担当者メール', 'required|valid_email');
        $this->form_validation->set_rules('payment', 'お支払い方法', 'required');

        //set validation message
        $this->form_validation->set_message('required', '%s 必須入力です');
        $this->form_validation->set_message('numeric', '数値でなければなりません');
        $this->form_validation->set_message('valid_email', '正しくフォーマットである必要があります');

        if($this->input->post())
        {
            $data_input = array(
               "domain_name"        => $this->input->post("domain_name"),
               "dns"                => $this->input->post("dns"),
               "start_year"         => $this->input->post("start_year"),
               "start_month"        => $this->input->post("start_month"),
               "start_day"          => $this->input->post("start_day"),
               "plan_name"          => $this->input->post("plan_name"),
               "disk_space"         => $this->input->post("disk_space"),
               "guarantee_memory"   => $this->input->post("guarantee_memory"),
               "max_memory"         => $this->input->post("max_memory"), 
               "limit_memory"       => $this->input->post("limit_memory"),
               "manager"            => $this->input->post("manager"),
               "op_backup"          => $this->input->post("op_backup"),
               "op_firewall"        => $this->input->post("op_firewall"),
               "ssl"                => $this->input->post("ssl"),
               "IP_address"         => $this->input->post("IP_address"),
               "OS"                 => $this->input->post("OS"),
               "Apache"             => $this->input->post("Apache"),
               "PHP"                => $this->input->post("PHP"),
               "mysql"              => $this->input->post("mysql"),
               "postgresql"         => $this->input->post("postgresql"),
               "MTA"                => $this->input->post("MTA"),
               "access_limit_01"    => $this->input->post("access_limit_01"),
               "access_limit_02"    => $this->input->post("access_limit_02"),
               "access_limit_03"    => $this->input->post("access_limit_03"),
               "access_limit_04"    => $this->input->post("access_limit_04"),
               "access_limit_05"    => $this->input->post("access_limit_05"),
               "access_limit_06"    => $this->input->post("access_limit_06"),
               "access_limit_07"    => $this->input->post("access_limit_07"),
               "access_limit_08"    => $this->input->post("access_limit_08"),
               "access_limit_09"    => $this->input->post("access_limit_09"),
               "access_limit_10"    => $this->input->post("access_limit_10"),
               "company_name"       => $this->input->post("company_name"),
               "company_name_yomi"  => $this->input->post("company_name_yomi"),
               "zip_03"             => $this->input->post("zip_03"),
               "zip_04"             => $this->input->post("zip_04"),
               "address"            => $this->input->post("address"),
               "division"           => $this->input->post("division"),
               "title"              => $this->input->post("title"),
               "person_name"        => $this->input->post("person_name"),
               "person_name_yomi"   => $this->input->post("person_name_yomi"),
               "tel"                => $this->input->post("tel"),
               "fax"                => $this->input->post("fax"),
               "email"              => $this->input->post("email"),
               "policy"             => $this->input->post("policy"),
               "order_name"         => $this->input->post("order_name"),
               "order_email"        => $this->input->post("order_email"),
               "payment"            => $this->input->post("payment"),
               "message"            => $this->input->post("message"),
            );

            if ($this->form_validation->run() == TRUE) 
            {
                $this->session->set_userdata('data_input', $data_input);
                redirect(base_url().'order_l/confirm');
            }
            else
            {
                $data['data_old'] =  $data_input;
                $this->load->view('requests/requestl/input', $data); 
            }
        }
        else
        {
           $this->load->view('requests/requestl/input'); 
        }
    }
       
    /*Order-L
     *@Create date: 12/01/2015
     *@Method: confirm 
     *
     */        
    public function confirmL()
    {
        $data_input['data'] = $this->session->userdata('data_input');

        if(empty($data_input))
        {
            redirect('request/kaigisho-dt');
        }

        $this->load->view('requests/requestl/confirm', $data_input);
    }

    /*Order-L
     *@Create date: 12/01/2015
     *@Method: complete 
     *
     */        
    public function completeL()
    {
        $dt = $this->session->userdata('data_input');

        if(empty($dt))
        {
            redirect('request/kaigisho-dt');
        }

        $data_input['data'] = $this->session->userdata('data_input');            
        $this->load->view('requests/requestl/complete', $data_input);
        //$this->_sendEmail($data_input);
        $this->_mail_send($data_input);

    }
    
    /*Order-Y
     *@Create date: 12/01/2015
     *@Method: input 
     *
     */
    public function inputY()
    {

    //set validation rules
    $this->form_validation->set_rules('domain_name', 'ドメイン名', 'required');
    $this->form_validation->set_rules('start_year', '開始年', 'required');
    $this->form_validation->set_rules('start_month', '開始月', 'required');
    $this->form_validation->set_rules('start_day', '開始日', 'required');
    $this->form_validation->set_rules('company_name', '企業名', 'required');
    $this->form_validation->set_rules('company_name_yomi', '企業名（よみ）', 'required');
    $this->form_validation->set_rules('zip_03', '郵便番号3', 'required|numeric');
    $this->form_validation->set_rules('zip_04', '郵便番号4', 'required|numeric');
    $this->form_validation->set_rules('address', '住所', 'required');
    $this->form_validation->set_rules('person_name', '担当者名', 'required');
    $this->form_validation->set_rules('person_name_yomi', '担当者名（よみ）', 'required');
    $this->form_validation->set_rules('tel', 'Tel', 'required');
    $this->form_validation->set_rules('email', 'メール', 'required|valid_email');
    $this->form_validation->set_rules('order_name', 'DP担当者', 'required');
    $this->form_validation->set_rules('order_email', 'DP担当者メール', 'required|valid_email');
    $this->form_validation->set_rules('payment', 'お支払い方法', 'required');
            
    //set validation message
    $this->form_validation->set_message('required', '%s 必須入力です');
    $this->form_validation->set_message('numeric', '数値でなければなりません');
    $this->form_validation->set_message('valid_email', '正しくフォーマットである必要があります');

    if($this->input->post())
    {
        $data_input = array(
                   "domain_name"        => $this->input->post("domain_name"),
                   "dns"                => $this->input->post("dns"),
                   "start_year"         => $this->input->post("start_year"),
                   "start_month"        => $this->input->post("start_month"),
                   "start_day"          => $this->input->post("start_day"),
                   "plan_name"          => $this->input->post("plan_name"),
                   "disk_space"         => $this->input->post("disk_space"),
                   "guarantee_memory"   => $this->input->post("guarantee_memory"),
                   "max_memory"         => $this->input->post("max_memory"),
                   "limit_memory"       => $this->input->post("limit_memory"),
                   "manager"            => $this->input->post("manager"),
                   "op_backup"          => $this->input->post("op_backup"),
                   "op_firewall"        => $this->input->post("op_firewall"),
                   "ssl"                => $this->input->post("ssl"),
                   "IP_address"         => $this->input->post("IP_address"),
                   "OS"                 => $this->input->post("OS"),
                   "Apache"             => $this->input->post("Apache"),
                   "PHP"                => $this->input->post("PHP"),
                   "mysql"              => $this->input->post("mysql"),
                   "postgresql"         => $this->input->post("postgresql"),
                   "MTA"                => $this->input->post("MTA"),
                   "access_limit_01"    => $this->input->post("access_limit_01"),
                   "access_limit_02"    => $this->input->post("access_limit_02"),
                   "access_limit_03"    => $this->input->post("access_limit_03"),
                   "access_limit_04"    => $this->input->post("access_limit_04"),
                   "access_limit_05"    => $this->input->post("access_limit_05"),
                   "access_limit_06"    => $this->input->post("access_limit_06"),
                   "access_limit_07"    => $this->input->post("access_limit_07"),
                   "access_limit_08"    => $this->input->post("access_limit_08"),
                   "access_limit_09"    => $this->input->post("access_limit_09"),
                   "access_limit_10"    => $this->input->post("access_limit_10"),
                   "company_name"       => $this->input->post("company_name"),
                   "company_name_yomi"  => $this->input->post("company_name_yomi"),
                   "zip_03"             => $this->input->post("zip_03"),
                   "zip_04"             => $this->input->post("zip_04"),
                   "address"            => $this->input->post("address"),
                   "division"           => $this->input->post("division"),
                   "title"              => $this->input->post("title"),
                   "person_name"        => $this->input->post("person_name"),
                   "person_name_yomi"   => $this->input->post("person_name_yomi"),
                   "tel"                => $this->input->post("tel"),
                   "fax"                => $this->input->post("fax"),
                   "email"              => $this->input->post("email"),
                   "policy"             => $this->input->post("policy"),
                   "order_name"         => $this->input->post("order_name"),
                   "order_email"        => $this->input->post("order_email"),
                   "payment"            => $this->input->post("payment"),
                   "message"            => $this->input->post("message"),
            );

        if ($this->form_validation->run() == TRUE) 
            {      
               $this->session->set_userdata('data_input', $data_input);          
                redirect(base_url().'request/kaigisho-dt/order_y/confirm');
            }else{
                $data['data_old'] =  $data_input;
                $this->load->view('requests/requesty/input', $data); 
            }
        }else{
           $this->load->view('requests/requesty/input'); 
        }
    }
       
    /*Order-Y
     *@Create date: 12/01/2015
     *@Method: confirm 
     *
     */        
    public function confirmY()
    {
        $data_input['data'] = $this->session->userdata('data_input');
        if(empty($data_input)){
            $this->backHome();
        }
        $this->load->view('requests/requesty/confirm', $data_input);
    }

    /*Order-C
     *@Create date: 12/01/2015
     *@Method: complete 
     *
     */
    public function completeY(){
        $data_input['data'] = $this->session->userdata('data_input');            
        $this->load->view('requests/requestc/complete', $data_input);
        $this->_sendEmail($data_input);
        $dt = $this->session->userdata('data_input');
        if(!empty($dt)){
            $this->session->unset_userdata('data_input');
        }
    }

    /*Order-C
     *@Create date: 12/01/2015        
     *@Method: input 
     *
     */
    public function inputC(){
        //set validation rules
        $this->form_validation->set_rules('domain_name', 'ドメイン名', 'required');
        $this->form_validation->set_rules('start_year', '開始年', 'required');
        $this->form_validation->set_rules('start_month', '開始月', 'required');
        $this->form_validation->set_rules('start_day', '開始日', 'required');
        $this->form_validation->set_rules('company_name', '企業名', 'required');
        $this->form_validation->set_rules('company_name_yomi', '企業名（よみ）', 'required');
        $this->form_validation->set_rules('zip_03', '郵便番号3', 'required|numeric');
        $this->form_validation->set_rules('zip_04', '郵便番号4', 'required|numeric');
        $this->form_validation->set_rules('address', '住所', 'required');
        $this->form_validation->set_rules('person_name', '担当者名', 'required');
        $this->form_validation->set_rules('person_name_yomi', '担当者名（よみ）', 'required');
        $this->form_validation->set_rules('tel', 'Tel', 'required');
        $this->form_validation->set_rules('email', 'メール', 'required|valid_email');
        $this->form_validation->set_rules('order_name', 'DP担当者', 'required');
        $this->form_validation->set_rules('order_email', 'DP担当者メール', 'required|valid_email');
        $this->form_validation->set_rules('payment', 'お支払い方法', 'required');
                
        //set validation message
        $this->form_validation->set_message('required', '%s 必須入力です');
        $this->form_validation->set_message('numeric', '数値でなければなりません');
        $this->form_validation->set_message('valid_email', '正しくフォーマットである必要があります');
        if($this->input->post()){
            $data_input = array(
                   "domain_name"        => $this->input->post("domain_name"),
                   "dns"                => $this->input->post("dns"),
                   "start_year"         => $this->input->post("start_year"),
                   "start_month"        => $this->input->post("start_month"),
                   "start_day"          => $this->input->post("start_day"),
                   "plan_name"          => $this->input->post("plan_name"),
                   "disk_space"         => $this->input->post("disk_space"),
                   "guarantee_memory"   => $this->input->post("guarantee_memory"),
                   "max_memory"         => $this->input->post("max_memory"),
                   "limit_memory"       => $this->input->post("limit_memory"),
                   "manager"            => $this->input->post("manager"),
                   "op_backup"          => $this->input->post("op_backup"),
                   "op_firewall"        => $this->input->post("op_firewall"),
                   "ssl"                => $this->input->post("ssl"),
                   "IP_address"         => $this->input->post("IP_address"),
                   "OS"                 => $this->input->post("OS"),
                   "Apache"             => $this->input->post("Apache"),
                   "PHP"                => $this->input->post("PHP"),
                   "mysql"              => $this->input->post("mysql"),
                   "postgresql"         => $this->input->post("postgresql"),
                   "MTA"                => $this->input->post("MTA"),
                   "access_limit_01"    => $this->input->post("access_limit_01"),
                   "access_limit_02"    => $this->input->post("access_limit_02"),
                   "access_limit_03"    => $this->input->post("access_limit_03"),
                   "access_limit_04"    => $this->input->post("access_limit_04"),
                   "access_limit_05"    => $this->input->post("access_limit_05"),
                   "access_limit_06"    => $this->input->post("access_limit_06"),
                   "access_limit_07"    => $this->input->post("access_limit_07"),
                   "access_limit_08"    => $this->input->post("access_limit_08"),
                   "access_limit_09"    => $this->input->post("access_limit_09"),
                   "access_limit_10"    => $this->input->post("access_limit_10"),
                   "company_name"       => $this->input->post("company_name"),
                   "company_name_yomi"  => $this->input->post("company_name_yomi"),
                   "zip_03"             => $this->input->post("zip_03"),
                   "zip_04"             => $this->input->post("zip_04"),
                   "address"            => $this->input->post("address"),
                   "division"           => $this->input->post("division"),
                   "title"              => $this->input->post("title"),
                   "person_name"        => $this->input->post("person_name"),
                   "person_name_yomi"   => $this->input->post("person_name_yomi"),
                   "tel"                => $this->input->post("tel"),
                   "fax"                => $this->input->post("fax"),
                   "email"              => $this->input->post("email"),
                   "policy"             => $this->input->post("policy"),
                   "order_name"         => $this->input->post("order_name"),
                   "order_email"        => $this->input->post("order_email"),
                   "payment"            => $this->input->post("payment"),
                   "message"            => $this->input->post("message"),
                );

            if ($this->form_validation->run() == TRUE) 
                {      
                   $this->session->set_userdata('data_input', $data_input);          
                    redirect(base_url().'request/kaigisho-dt/order_c/confirm');
                }else{
                    $data['data_old'] =  $data_input;
                    $this->load->view('requests/requestc/input', $data); 
                }
            }else{
               $this->load->view('requests/requestc/input'); 
            }
        }
       
    /*Order-L
     *@Create date: 12/01/2015        
     *@Method: confirm 
     *
     */        
    public function confirmC()
    {
        $data_input['data'] = $this->session->userdata('data_input');
        if(empty($data_input)){
            $this->backHome();
        }
        $this->load->view('requests/requestc/confirm', $data_input);
    }

    /*Order-C
     *@Create date: 12/01/2015        
     *@Method: complete 
     *
     */        
    public function completeC(){
        $data_input['data'] = $this->session->userdata('data_input');
        $this->load->view('requests/requestc/complete', $data_input);
        $this->_sendEmail($data_input);
        $dt = $this->session->userdata('data_input');
        if(!empty($dt)){
            $this->session->unset_userdata('data_input');
        }
    }
    
    /*Order-F
     *@Create date: 12/01/2015
     *@Method: input 
     *
     */
    public function inputF(){
        //set validation rules
        $this->form_validation->set_rules('domain_name', 'ドメイン名', 'required');
        $this->form_validation->set_rules('start_year', '開始年', 'required');
        $this->form_validation->set_rules('start_month', '開始月', 'required');
        $this->form_validation->set_rules('start_day', '開始日', 'required');
        $this->form_validation->set_rules('company_name', '企業名', 'required');
        $this->form_validation->set_rules('company_name_yomi', '企業名（よみ）', 'required');
        $this->form_validation->set_rules('zip_03', '郵便番号3', 'required|numeric');
        $this->form_validation->set_rules('zip_04', '郵便番号4', 'required|numeric');
        $this->form_validation->set_rules('address', '住所', 'required');
        $this->form_validation->set_rules('person_name', '担当者名', 'required');
        $this->form_validation->set_rules('person_name_yomi', '担当者名（よみ）', 'required');
        $this->form_validation->set_rules('tel', 'Tel', 'required');
        $this->form_validation->set_rules('email', 'メール', 'required|valid_email');
        $this->form_validation->set_rules('order_name', 'DP担当者', 'required');
        $this->form_validation->set_rules('order_email', 'DP担当者メール', 'required|valid_email');
        $this->form_validation->set_rules('payment', 'お支払い方法', 'required');
                
        //set validation message
        $this->form_validation->set_message('required', '%s 必須入力です');
        $this->form_validation->set_message('numeric', '数値でなければなりません');
        $this->form_validation->set_message('valid_email', '正しくフォーマットである必要があります');
        if($this->input->post()){
            $data_input = array(
                    "domain_name"        => $this->input->post("domain_name"),
                    "dns"                => $this->input->post("dns"),
                    "start_year"         => $this->input->post("start_year"),
                    "start_month"        => $this->input->post("start_month"),
                    "start_day"          => $this->input->post("start_day"),
                    "plan_name"          => $this->input->post("plan_name"),
                    "disk_space"         => $this->input->post("disk_space"),
                    "guarantee_memory"   => $this->input->post("guarantee_memory"),
                    "max_memory"         => $this->input->post("max_memory"),
                    "limit_memory"       => $this->input->post("limit_memory"),
                    "manager"            => $this->input->post("manager"),
                    "op_backup"          => $this->input->post("op_backup"),
                    "op_firewall"        => $this->input->post("op_firewall"),
                    "ssl"                => $this->input->post("ssl"),
                    "IP_address"         => $this->input->post("IP_address"),
                    "OS"                 => $this->input->post("OS"),
                    "Apache"             => $this->input->post("Apache"),
                    "PHP"                => $this->input->post("PHP"),
                    "mysql"              => $this->input->post("mysql"),
                    "postgresql"         => $this->input->post("postgresql"),               
                    "MTA"                => $this->input->post("MTA"),
                    "access_limit_01"    => $this->input->post("access_limit_01"),
                    "access_limit_02"    => $this->input->post("access_limit_02"),
                    "access_limit_03"    => $this->input->post("access_limit_03"),
                    "access_limit_04"    => $this->input->post("access_limit_04"),
                    "access_limit_05"    => $this->input->post("access_limit_05"),
                    "access_limit_06"    => $this->input->post("access_limit_06"),
                    "access_limit_07"    => $this->input->post("access_limit_07"),
                    "access_limit_08"    => $this->input->post("access_limit_08"),
                    "access_limit_09"    => $this->input->post("access_limit_09"),
                    "access_limit_10"    => $this->input->post("access_limit_10"),
                    "company_name"       => $this->input->post("company_name"),               
                    "company_name_yomi"  => $this->input->post("company_name_yomi"),
                    "zip_03"             => $this->input->post("zip_03"),
                    "zip_04"             => $this->input->post("zip_04"),
                    "address"            => $this->input->post("address"),
                    "division"           => $this->input->post("division"),
                    "title"              => $this->input->post("title"),
                    "person_name"        => $this->input->post("person_name"),               
                    "person_name_yomi"   => $this->input->post("person_name_yomi"),               
                    "tel"                => $this->input->post("tel"),
                    "fax"                => $this->input->post("fax"),
                    "email"              => $this->input->post("email"),
                    "policy"             => $this->input->post("policy"),               
                    "order_name"         => $this->input->post("order_name"),               
                    "order_email"        => $this->input->post("order_email"),
                    "payment"            => $this->input->post("payment"),
                    "message"            => $this->input->post("message"),               
                );

        if ($this->form_validation->run() == TRUE) 
            {      
               $this->session->set_userdata('data_input', $data_input);          
                redirect(base_url().'request/kaigisho-dt/order_f/confirm');
            }else{
                $data['data_old'] =  $data_input;
                $this->load->view('requests/requestf/input', $data); 
            }
        }else{
           $this->load->view('requests/requestf/input'); 
        }
    }
       
    /*Order-L
     *@Create date: 12/01/2015
     *@Method: confirm 
     *
     */
    public function confirmF()
    {
        $data_input['data'] = $this->session->userdata('data_input');            
        if(empty($data_input)){
            $this->backHome();
        }
        $this->load->view('requests/requestf/confirm', $data_input);
    }

    /*Order-C
     *@Create date: 12/01/2015        
     *@Method: complete 
     *
     */
    public function completeF()
    {
        $data_input['data'] = $this->session->userdata('data_input');            
        $this->load->view('requests/requestc/complete', $data_input);
        $this->_sendEmail($data_input);
        $dt = $this->session->userdata('data_input');
        if(!empty($dt)){
            $this->session->unset_userdata('data_input');
        }
    }

    /*Order
     *@Create date: 12/01/2015
     *@Method: back home page 
     *
     */        
    public function backHome()
    {
        redirect('/');
    }

    /*Order
     *@Create date: 12/01/2015
     *@Method: sendEmail 
     *
     */
    private function _sendEmail($data=null)
    {
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'urakami@chiroro.co.jp';
        $config['smtp_pass'] = '';
        $config['mail_type'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n";
        $this->email->initialize($config);

        $data = $this->load->view('requests/templates/email', $data, true);
        $this->email->from('support@chiroro.com', 'Chiroro-Net Customer Support');
        $this->email->to($data['order_email']);
        $this->email->cc('support@chiroro.com');
        $this->email->subject('【申込】大商OEMプラン');
        $this->email->message($data);
        $this->email->send();
        $this->email->clear();

//        $data = array();
//        $data['name'] = '大田 博之';
//        $data['mail'] = 'urakami@chiroro.co.jp';
//        $data['tel'] = '086-430-3956';
//        $data['zip'] = '110-0015';
//        $data['address'] = 'test';
//        $data['contact_body'] = 'お問い合わせ内容';
//
//        // パーサーロード
//        $this->load->library('parser');
//
//        // テンプレートに変数をアサイン
//        $message = $this->parser->parse('requests/templates/contact', $data, TRUE);
//
//        // メールライブラリをロード
//        $this->load->library('myemail');
//        $config['protocol'] = 'sendmail';
//        $config['mailpath'] = '/usr/sbin/sendmail';
//        $config['_encoding'] = '7bit';
//        $config['charset'] = 'ISO-2022-JP';
//        $config['wordwrap'] = FALSE;
//        $this->myemail->initialize($config);
//
//
//        $this->email->from($data['mail'], mb_encode_mimeheader($data['name'], 'UTF-8', 'B'));
//        $this->email->to('urakami@chiroro.co.jp');
//        $this->email->subject('お問い合わせを受け付けました');
//        $this->email->message($message);
//        // メール送信
//        $this->email->send();
//
//        $this->load->view('requests/templates/email', $data, true);


    }

    private function _mail_send($data)
    {

        $sub = mb_encode_mimeheader('【申込】大商OEMプラン', 'ISO-2022-JP');
        $from_mail = mb_encode_mimeheader('チロロネットカスタマーサポート','ISO-2022-JP');

        $to = $data['data']['order_email'];
        $data = $this->load->view('requests/templates/email', $data, true);
        $data = mb_convert_encoding($data,'ISO-2022-JP');

        $data2 = $this->load->view('requests/templates/email_support', $data, true);
        $data2 = mb_convert_encoding($data2,'ISO-2022-JP');

        $this->load->library('myemail');
        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['_encoding'] = '7bit';
        $config['charset'] = 'ISO-2022-JP';
        $config['wordwrap'] = FALSE;

        $this->myemail->initialize($config);
        $this->myemail->from('support@chiroro.com',$from_mail);
        $this->myemail->to($to);
        $this->myemail->subject($sub);
        $this->myemail->message($data);
        $this->myemail->send();
        $this->myemail->clear();


        $this->load->library('myemail');
        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['_encoding'] = '7bit';
        $config['charset'] = 'ISO-2022-JP';
        $config['wordwrap'] = FALSE;
        $this->myemail->initialize($config);

        $this->myemail->from('support@chiroro.com',$from_mail);
        $this->myemail->to('urakami@chiroro.co.jp');
        $this->myemail->subject($sub);
        $this->myemail->message($data2);
        $this->myemail->send();
        $this->myemail->clear();

    }

}
