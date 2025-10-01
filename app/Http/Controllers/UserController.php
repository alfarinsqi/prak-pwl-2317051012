<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Usermodel;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public $userModel;
    public $kelasModel; 

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    } 

    public function store(request $request){

        $this->userModel->create([
            'nama' => $request->input('nama'), 
            'nim' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'), 

        ]); 

        return redirect()->to('/user');
    } 

    
    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

  
}