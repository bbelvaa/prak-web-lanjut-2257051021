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

    public function show($id)
{
    // Ambil data user beserta relasi kelas
    $user = $this->userModel->with('kelas')->find($id);

    // Jika user tidak ditemukan, kembalikan error 404
    if (!$user) {
        abort(404, 'User not found');
    }

    // Kirim data user ke view profile
    $data = [
        'title' => 'Profile User',
        'user' => $user,
    ];

    return view('profile', $data);
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
        $file->move(public_path('uploads'), $filename); // Simpan foto ke folder 'uploads'

        // Menyimpan data ke database termasuk path foto
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
            'foto' => $filename, // Menyimpan nama file foto
        ]);
    } else {
        // Jika tidak ada foto, tetap buat user tanpa foto
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
    }

    return redirect()->to('/user');
}
}