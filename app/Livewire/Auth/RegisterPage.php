<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Register')]
class RegisterPage extends Component
{
    public $first_name;
    public $last_name;
    public $birth_date;
    public $gender;
    public $address;
    public $city;
    public $province;
    public $phone;
    public $email;
    public $password;

    public function save() {
        $this->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'birth_date' => 'required',
            'gender' => 'required',
            'address' => 'required|max:255',
            'city' => 'required',
            'province' => 'required',
            'phone' => 'required|max:15',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'birth_date' => $this->birth_date,
            'gender' => $this->gender,
            'address' => $this->address,
            'city' => $this->city,
            'province' => $this->province,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        auth()->guard()->login($user);

        return redirect()->intended();
    }

    public function render()
    {
        return view('livewire.auth.register-page');
    }
}