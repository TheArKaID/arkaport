<?php

namespace App\Http\Livewire\Admin\Expertise;

use App\Models\Expertise;
use Livewire\Component;

class Index extends Component
{
    public $expertises;

    public function mount()
    {
        $this->expertises = Expertise::all();
    }

    public function render()
    {
        return view('livewire.admin.expertise.index')->extends('layouts.app');
    }
}