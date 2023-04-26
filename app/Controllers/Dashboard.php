<?php namespace App\Controllers;

use CodeIgniter\Controller;



class Dashboard extends Controller
{
    protected $session;
    protected $userModel;

    public function __construct()
    {
        $this->session = session();
        $this->userModel = new \App\Models\UserModel();

    }
    public function index()
    {

        $getAlldata = $this->userModel->findAll();
        
        return view('dashboard',['getAlldata'=>$getAlldata]);

    }

    public function create()
    {

        return view('create');

    }

    public function save()
    {
        $request = request();
       // $db = \Config\Database::connect();
        
        //dd($db);

      
        $data = [
            'fname' => $request->getPost('fname'),
            'lname' => $request->getPost('lname'),
            'email' => $request->getPost('email'),
            'phone' => $request->getPost('phone'),
            'create_date' => date('Y-m-d'),

        ];
       // $userModel->insert($data);
       $insert1 =  $this->userModel->insert($data);

       if ($insert1){
            $this->session->setFlashdata('success', 'Operation completed successfully.');
            return redirect()->to('dashboard');

       }
        //dd($UserModel1);

    }
    public function delete($id)
    {
        $user = $this->userModel->delete($id);


        if($user){

            $this->session->setFlashdata('delsuccess', 'Delete completed successfully.');
            return redirect()->to('dashboard');

        }


    }
    public function edit($id)
    {
        $user = $this->userModel->find($id);
      

        return view('edit',['user'=>$user]);

    }
    public function update($id)
    {
        $request = request();
        $data = [
            'fname' => $request->getPost('fname'),
            'lname' => $request->getPost('lname'),
            'email' => $request->getPost('email'),
            'phone' => $request->getPost('phone'),
            'create_date' => date('Y-m-d'),

        ];
       // $userModel->insert($data);
       $insert1 =  $this->userModel->update($id,$data);

       if ($insert1){
        $this->session->setFlashdata('success3', 'Operation completed successfully.');
        return redirect()->to('dashboard');

   }
    }

}
