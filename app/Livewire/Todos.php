<?php

namespace App\Livewire;


class Todos
{

    public $draft = '';

    public $todos = [];

    public function mount()
    {
        $this->todos = ['One Todo', 'Two Todo'];
    }

    public function updatedDraft()
    {
        $this->draft = strtoupper($this->draft);
    }

    public function addTodo()
    {
        $this->todos[] = $this->draft;

        $this->draft = '';
    }

    public function render()
    {
        return <<<'HTML'
            <div class="todos">
                <input type="text" wire:model="draft">

                <button wire:click="addTodo">Add Todo</button>   

                <ul>
                    @foreach($todos as $todo)    
                        <li>{{ $todo }}</li>
                    @endforeach
                </ul>
            </div>
        HTML;
    }
}
