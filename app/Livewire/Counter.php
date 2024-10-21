<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter;

    public function increment(): void
    {
        $this->counter++;
    }

    public function decrement(): void
    {
        $this->counter--;
    }

    public function mount()
    {
        $this->counter = 0;
    }
}
