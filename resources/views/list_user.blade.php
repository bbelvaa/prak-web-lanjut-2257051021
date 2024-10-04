@extends('layouts.app')

@section('content')

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8c1c1; /* Pink Background */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .table-container {
        background-color: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 800px;
        transition: transform 0.3s ease;
    }
    .table-container:hover {
        transform: translateY(-10px); 
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #ff6b6b;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    td {
        color: #333;
    }
    .aksi {
        text-align: center;
    }
    .aksi a {
        padding: 10px 15px;
        background-color: #ff6b6b;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.3s;
    }
    .aksi a:hover {
        background-color: #ff4757;
        transform: scale(1.05);
    }
</style>

<div class="table-container">
    <h1 style="color: #ff6b6b; text-align: center;">Daftar Pengguna</h1>
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
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</td>
                <td class="aksi">
                    <a href="/user/edit/{{ $user->id }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
