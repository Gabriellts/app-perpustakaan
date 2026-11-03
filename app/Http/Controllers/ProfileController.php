<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // Menampilkan halaman profil
    public function show()
    {
        $user = auth()->user();

        return view('profile.show', compact('user'));
    }

    // Memproses perubahan password
    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ], [
            'old_password.required' => 'Password lama wajib diisi.',
            'password.required' => 'Password baru wajib diisi.',
            'password.min' => 'Password baru minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password baru tidak cocok.',
        ]);

        $user = auth()->user();

        // Memeriksa password lama
        if (! Hash::check($validated['old_password'], $user->password)) {
            return back()->withErrors([
                'old_password' => 'Password lama yang kamu masukkan salah.',
            ]);
        }

        // Menyimpan password baru dalam bentuk hash
        $user->password = Hash::make($validated['password']);
        $user->save();

        return redirect()->route('profile.show')
            ->with('success', 'Password berhasil diperbarui.');
    }
}