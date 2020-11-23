<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Profile extends Component
{
    public User $profile;
    public $password, $newpass, $renewpass;

    protected $rules = [
        'profile.name' => 'required',
        'profile.email' => 'required|email',
        'profile.status' => 'required',
        'profile.detail' => 'required',
        'profile.motto' => 'required',
        'profile.address' => 'required',
        'profile.phone' => 'required',
    ];
    
    protected $messages = [
        'profile.name.required' => 'Nama Harus Diisi!',
        'profile.email.required' => 'Email Harus Diisi!',
        'profile.email.email' => 'Format Email Salah!',
        'profile.status.required' => 'Job Title Harus Diisi!',
        'profile.detail.required' => 'Biodata Harus Diisi!',
        'profile.motto.required' => 'Motto Harus Diisi!',
        'profile.address.required' => 'Alamat Harus Diisi!',
        'profile.phone.required' => 'Nomor HP Harus Diisi!',
    ];

    public function mount()
    {
        $this->profile = User::find(Auth::user()->id);
    }

    public function render()
    {
        return view('livewire.admin.profile')->extends('layouts.app');
    }

    public function save()
    {
        $this->validate();

        if(Hash::check($this->password, Auth::user()->password)){
            // Update Password
            if($this->renewpass!=='' || $this->newpass!==''){
                if($this->renewpass===$this->newpass) {
                    $this->profile->password = Hash::make($this->newpass);
                    $this->newpass = "";
                    $this->renewpass = "";
                } else {
                    $this->addError('newpass', 'Password Baru Harus Sama!');
                }
            }

            $this->profile->save();
            session()->flash('success', 'Update data Berhasil');
        } else {
            $this->addError('password', 'Password Salah!');
        }

        $this->password = "";
    }
}
