
@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
    <h1>Profil Saya</h1>

    <h3>Informasi Akun</h3>

    <table>
        <tr>
            <th>Nama</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Role</th>
            <td>{{ ucfirst($user->role) }}</td>
        </tr>
    </table>

    <hr>

    <h3>Ganti Password</h3>

    <form action="{{ route('profile.password.update') }}" method="POST">
        @csrf

        <label for="old_password">Password Lama</label>
        <input type="password" name="old_password" id="old_password">
        @error('old_password')
            <p class="error">{{ $message }}</p>
        @enderror

        <br><br>

        <label for="password">Password Baru</label>
        <input type="password" name="password" id="password">
        @error('password')
            <p class="error">{{ $message }}</p>
        @enderror

        <br><br>

        <label for="password_confirmation">Konfirmasi Password Baru</label>
        <input type="password" name="password_confirmation" id="password_confirmation">

        <br><br>

        <button type="submit" class="btn">Simpan Password Baru</button>
    </form>
@endsection
