<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Base extends Component
{
    public function render()
    {
        return view('livewire.base')->extends('layouts.app')->section('content');
    }
}
