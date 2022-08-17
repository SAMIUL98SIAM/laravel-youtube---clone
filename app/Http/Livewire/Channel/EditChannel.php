<?php

namespace App\Http\Livewire\Channel;

use Livewire\Component;
use App\Models\channel;

class EditChannel extends Component
{
    public $name = "Siam";
    // public $channel;

    // public function mount(Channel $channel)
    // {
    //     $this->channel = $channel;
    // }
    public function render()
    {
        return view('livewire.channel.edit-channel');
    }

    public function submit()
    {
        dd('submitted');
    }
}
