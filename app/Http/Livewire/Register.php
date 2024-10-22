<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Filament\Notifications\Notification;

class Register extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $name, $email, $password, $password_confirmation;

    public function mount()
    {
        $this->form->fill([]);
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')->required()->label('Nama'),
            TextInput::make('email')->email()->required()->label('Email'),
            TextInput::make('password')->password()->required()->label('Kata Sandi'),
            TextInput::make('password_confirmation')->password()->required()->label('Konfirmasi Kata Sandi'),
        ];
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->assignRole('userppdb');

        Notification::make()
            ->success()
            ->title('Registrasi Berhasil')
            ->body('Akun Anda telah berhasil dibuat.')
            ->send();

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.register');
    }
}


