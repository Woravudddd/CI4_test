<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Validation\Validation;
use CodeIgniter\Validation\Rules;


class Login extends Controller {

        protected $session;
        protected $model;
     
public function __construct()
{
    $this->session = session();
    $this->model = new \App\Models\RegisterModel();
  
   
}
public function LoginView(){


    return view('login');

}

public function LoginClick()
{
    $request = request();

    $email = $request->getVar('email');
    $password = $request->getVar('password');

   
    
    
        $check_email = $this->model->where('email',$email)->first();

        

        if($check_email && password_verify('password', $check_email['password']) 
        || $email != "" || $email != NULL 
        || $password != "" || $password != NULL)
        {

            $this->session->set('isLoggedIn', true);
            $this->session->set('email', $check_email['email']);
            $this->session->set('id', $check_email['id']);

            return redirect()->to('dashboard');

        }else{

            return redirect()->to('login')->withInput()->with('error', 'Please enter your email and password or your password is not true');
        }
    



}
public function RegisterPage()
{

    $data = [];

    return view('register',$data);
}

public function RegisterClick()
{
    $request = request();
    $validation = \Config\Services::validation();
    
    $rules = [
        'fname' => 'required|min_length[2]|max_length[50]',
        'lname' => 'required|min_length[2]|max_length[50]',
        'email' => 'required|valid_email|is_unique[tbl_register.email]',
        'password' => 'required|min_length[8]',
        'phone' => 'required|min_length[3]|max_length[10]',
        'confirm_password' => 'required|matches[password]'
    ];

    if($this->validate($rules))
    {

        $data = [
            'fname' => $request->getPost('fname') ,
            'lname' => $request->getPost('lname') ,
            'email' => $request->getPost('email') ,
            'phone' => $request->getPost('phone') ,
            'password' => password_hash($request->getVar('password'),PASSWORD_DEFAULT), 
           
            ];
            $this->model->insert($data);
        return redirect()->to('login')->with('SuccessRegister','register successfully');

    }else{

        $data['validation'] = $this->validator;
        return view('register', $data);
    

    }

}
public function Logout() {
    session_destroy();
    return redirect()->to('login');
}
}


?>