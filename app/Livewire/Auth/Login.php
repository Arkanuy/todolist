<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Mary\Traits\Toast;

#[Layout('components.layouts.login')]
class Login extends Component
{
    use Toast;
    public $email, $password;

    public function login()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];

        $user_db = User::where('email', $this->email)->first();

        if(!$user_db){
            return $this->toast('Login Gagal!', 'Akun tidak ditemukan.', css: 'alert-error');
        }

        $user_password = $user_db->password;

        if(!password_verify($this->password, $user_password)){
            return $this->toast('Login Gagal!', 'Password Salah', css: 'alert-error');
        }

        if (Auth::attempt($credentials)) {
            $user = Auth::guard()->user();

            $this->toast('Login Berhasil!', 'Selamat datang, ' . $user->name, 'success');

            return $user->role === 'admin'
                ? redirect()->route('admin.dashboard')
                : redirect()->route('user.dashboard');
        }

        // Jika login gagal
        $this->toast('Login Gagal!', 'Email atau Password salah', 'error', css: 'alert-error');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
