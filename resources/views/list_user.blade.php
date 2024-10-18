@extends ('layouts.app')

@section ('content')

<!-- Container untuk membungkus konten -->
<div class="container">

    <!-- Tombol Tambah Pengguna Baru di atas tabel -->
    <div class="mb-3 mt-2 m-3">
        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>
    </div>

    <!-- Tabel data pengguna -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $user) <!-- Mengganti $kelas menjadi $users -->
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->kelas->nama_kelas }}</td> <!-- Pastikan relasi kelas sudah diatur -->
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning mb-3">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection