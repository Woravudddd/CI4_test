<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\HomeshopModel;
use App\Models\RegisterModel;

class Homeshop extends Controller
{
    protected $modelShop;
    protected $modelUser;
    public function __construct()
    {

        $this->modelShop = new HomeshopModel();
        $this->modelUser = new RegisterModel();

        
    }

    public function index()
    {
        return view('home');
    }
    public function ManagePage()
    {
        $request = request();
        $session = session()->get('id') ;

        $name =  $this->modelUser->find($session);
        
       

        return view('manage');

    }
    public function CreateItemClick()
    {
        $request = request();
        $session = session()->get('id') ;

        $name =  $this->modelUser->find($session);
        $validate = \Config\Services::validation();

        $validation = [
            'name_item' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'quantity' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'image' => [
                'uploaded[image]',
                'mime_in[image,image/png,image/jpg,image/jpeg]',
                'max_size[image,1024]',
            ],
        ];


        
        if($this->validate($validation))
        {

            $file = $request->getFile('image');
            $newName = $file->getRandomName();

            
            $data = [
                'name_item' => $request->getPost('name_item') ,
                'detail' => $request->getPost('detail') ,
                'price' => $request->getPost('price') ,
                'unit' => $request->getPost('unit') ,
                'quantity' => $request->getPost('quantity'),
                'createby' => $name['id'],
                'fname' => $request->getPost('fname') ,
                'lname' => $request->getPost('lname') ,
                'image' => $newName ,
              ];
            $file->move('./uploads', $newName);

            $this->modelShop->insert($data);

            return redirect()->to('manage')->with('success','creata successfully');
              
             
        }else{

            $data['validation'] = $this->validator;
            return view('manage', $data);

        }
       
    }
}