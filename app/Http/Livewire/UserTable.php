<?php

// namespace App\Http\Livewire;

// use App\Models\User;
// use Livewire\Component;
// use Livewire\WithPagination;

// class UserTable extends Component
// {
//     use WithPagination;

//     public $search = "";
//     public $perPage = "5";

//     public function render()
//     {
//         return view('livewire.user-table', [
//             'users' => User::where('name', 'LIKE',  "%{$this->search}%")
//             ->paginate($this->perPage),
//         ]);
//     }

//     public function clear()
//     {
//         $this->search = "";
//         $this->perPage = "5";
//     }
// }

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = "5";
    public $sortField = 'id';
    public $sortAsc = true;

    public function render()
    {
        // $users = User::paginate($perPage);
        $users = User::where('name', 'like', "%{$this->search}%")
            ->orWhere('email', 'like', '%'.$this->search.'%')
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
            

        return view('livewire.user-table', [
            'users' => $users,
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($field === $this->sortField) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortField = $field;
            $this->sortAsc = true;
        }
    }

        public function clear()
    {
        $this->search = "";
        $this->perPage = "5";
    }
}

