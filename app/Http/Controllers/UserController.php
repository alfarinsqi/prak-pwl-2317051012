<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel; 

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    } 

    // method untuk menampilkan form create user
    public function create(){
        $data = [
            'title' => 'Tambah User',
            'kelas' => $this->kelasModel->all(), // ambil semua data kelas untuk dropdown
        ];
        return view('create_user', $data);
    }

    public function store(Request $request){
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
