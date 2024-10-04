<!-- <form action="{{ route('user.store') }}" method="POST">
    @csrf
    @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>Create User</h2>

    <div class="form-group">
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" value="{{ old('nama') }}" required>
    </div>

    <div class="form-group">
        <label for="npm">NPM :</label>
        <input type="text" id="npm" name="npm" placeholder="Masukkan NPM Anda" value="{{ old('npm') }}" required>
    </div>

    <div class="form-group">
        <label for="kelas_id">Kelas :</label>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>
    </div>

    <input type="submit" value="Submit">
</form> -->
@extends('layouts.app')
@section('content')
<form action="/user/store" method="POST" novalidate> 
    @csrf
    <h2>Create User</h2>

    <div class="form-group">
        <label for="nama">Nama :</label>
        <i class="fas fa-user"></i>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" value="{{ old('nama') }}" required>
        @foreach ($errors->get('nama') as $msg)
        <p class="error">{{ $msg }}</p>
        @endforeach
    </div>

    <div class="form-group">
        <label for="npm">NPM :</label>
        <i class="fas fa-user"></i>
        <input type="text" id="npm" name="npm" placeholder="Masukkan NPM Anda" value="{{ old('npm') }}" required>
        @foreach ($errors->get('npm') as $msg)
            <p class="error">{{ $msg }}</p>
        @endforeach
    </div>

    <div class="form-group">
        <label for="kelas_id">Kelas :</label>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>
        @foreach ($errors->get('kelas_id') as $msg)
        <p class="error">{{ $msg }}</p>
        @endforeach
    </div>

    <input type="submit" value="Submit">
</form>
@endsection