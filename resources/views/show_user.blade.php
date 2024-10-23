@extends('layouts.app')
@section('content')

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8c1c1; 
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .card {
        background-color: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        width: 350px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px); 
    }

    .profile-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-bottom: 20px;
        object-fit: cover; 
    }

    .info h1.label {
        color: #ff6b6b;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .info p {
        color: #333;
        font-size: 16px;
        margin: 10px 0;
    }

    .btn-kembali {
        display: inline-block;
        margin-top: 20px;
        padding: 12px;
        background-color: #ff6b6b; 
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-kembali:hover {
        background-color: #ff4757; 
        transform: scale(1.05); 
    }
</style>

<div class="card">
    <!-- Menampilkan gambar profil pengguna jika ada -->
    @if ($user->foto)
        <img src="{{ asset('uploads/' . $user->foto) }}" alt="Profile Picture" class="profile-img">
    @else
        <img src="{{ asset('path/to/default-image.jpg') }}" alt="Default Profile Picture" class="profile-img"> <!-- Gambar default jika tidak ada -->
    @endif

    <!-- Menampilkan informasi nama dan IPK pengguna -->
    <div class="info">
        <h1 class="label">{{ $nama_mhs ?? 'Nama tidak ditemukan' }}</h1> <!-- Menampilkan nama atau pesan jika tidak ada -->
        <p><strong>IPK:</strong> {{ $ipk ?? '-' }}</p> <!-- Menampilkan IPK atau '-' jika tidak ada -->
        <a href="{{ route('user.list') }}" class="btn-kembali">Kembali ke List</a>
    </div>
</div>

@endsection
