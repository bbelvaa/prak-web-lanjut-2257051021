@extends('layouts.app')
@section('content')
<form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <h2>Create User</h2>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama :</label>
        <input type="text" class="form-control"  id="nama" name="nama" value="{{ old('nama', $user->nama) }}">
        @foreach ($errors->get('nama') as $msg)
        <p class="error">{{ $msg }}</p>
        @endforeach
    </div>

    <div class="form-group">
        <label for="npm" class="form-label">NPM :</label>
        <input type="text" class="form-control"  id="npn" name="npm" value="{{ old('npm', $user->npm) }}">
        @foreach ($errors->get('npm') as $msg)
            <p class="error">{{ $msg }}</p>
        @endforeach
    </div>

    <div class="form-group">
        <label for="kelas_id">Kelas :</label>
        <select class="form-select" name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}"
                {{ $kelasItem->id == $user->kelas_id ? 'selected' : ''}}>
                {{ $kelasItem->nama_kelas }}
            </option>
            @endforeach
        </select>
        @foreach ($errors->get('kelas_id') as $msg)
        <p class="error">{{ $msg }}</p>
        @endforeach
    </div>

    <div class="form-group">
        <label for="foto">Foto:</label><br>
        <input type="file" name="foto" class="form-control">
        @if($user->foto)
        <img src="{{ Storage::url('uploads/' . $user->foto) }}" alt="Profile Picture" class="profile-img">        @endif
        <br><br>
    </div>

    <input type="submit" value="Submit">

</form>
