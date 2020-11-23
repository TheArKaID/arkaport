<?php

namespace App\Http\Livewire\Admin\Expertise;

use App\Models\Expertise;
use Livewire\Component;

class Create extends Component
{
    public $type, $name, $detail;

    protected $rules = [
        'type' => 'required|numeric',
        'name' => 'required|max:255',
        'detail' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.expertise.create')->extends('layouts.app');
    }
    
    public function add()
    {
        $this->validate();

        Expertise::create([
            'type' => $this->type,
            'name' => $this->name,
            'detail' => $this->detail
        ]);

        session()->flash('success', 'Data Expertise Berhasil Diupdate');
        return redirect(route('admin.expertise.index'));
    }
}
