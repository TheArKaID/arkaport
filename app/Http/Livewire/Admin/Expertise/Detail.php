<?php

namespace App\Http\Livewire\Admin\Expertise;

use App\Models\Expertise;
use Livewire\Component;

class Detail extends Component
{
    public Expertise $expertise;

    protected $rules = [
        'expertise.type' => 'required|numeric',
        'expertise.name' => 'required|max:255',
        'expertise.detail' => 'required',
    ];

    public function mount($id)
    {
        $this->expertise = Expertise::find($id);
    }

    public function render()
    {
        return view('livewire.admin.expertise.detail')->extends('layouts.app');
    }

    public function save()
    {
        $this->validate();

        $this->expertise->save();

        session()->flash('success', 'Data Expertise Berhasil Diupdate');
    }
}
