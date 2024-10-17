<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas; 
use App\Models\UserModel;
use App\Http\Requests\UserRequest;



class UserController extends Controller
{
        public $userModel;
        public $kelasModel;
        public function __construct()
    {
    $this->userModel = new UserModel();
    $this->kelasModel = new Kelas();
    }

    public function index() 
        { 
            $data = [ 
                'title' => 'Create User', 
                'kelas' => $this->userModel->getUser(), 
            ]; 
        
            return view('list_user', $data); 
        }

    public function profile($nama = "", $kelas = "", $npm = "") {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view ('profile', $data);
    }

    // public function create() {
    //     return view ('create_user', [
    //         'kelas' => Kelas::all(),
    //     ]);
    // }

    public function create() {
        $this->kelasModel = new Kelas();

        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
            'foto' => 'image|file|max:2048', // Validasi foto
        ]);

        // Proses upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            // $file->storeAs('upload', $filname, 'public');
            $file->move('img', $filename);
        
        // Menyimpan data ke database termasuk path foto
        $this->userModel->create([
        'nama' => $request->input('nama'),
        'npm' => $request->input('npm'),
        'kelas_id' => $request->input('kelas_id'),
        'foto' => $filename, 
        // Menyimpan path foto
        ]);

        
    }
    return redirect()->to('/user');

}
        public function show($id){
            $user = $this->userModel->getUser($id);

            $data = [
                'title' => 'Profile',
                'user' => $user,
            ];

            return view('profile', $data);
    
        }
}