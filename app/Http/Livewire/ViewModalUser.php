<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ViewModalUser extends Component
{
    public $showModal = 'hidden';
    public $name = '';
    public $email = '';
    public $created_at = '';
    public $updated_at = '';
    public $ban = '';
    public $team = '';


    protected $listeners = [
        'showModal' => 'showModal',
    ];
    
    public function render()
    {
        return view('livewire.view-modal-user');
    }

    public function showModal(User $user)
    {
        $this->name = $user->name;
        $this->email = $user->email;
        $this->created_at = $user->created_at;
        $this->updated_at = $user->updated_at;
        $this->ban = $user->banned_at;
        $this->team = $user->nombreClub->name;
        $this->showModal = 'block';
        // return $user;
    }

    public function closeModal()
    {
        $this->showModal = 'hidden';
    }
}
