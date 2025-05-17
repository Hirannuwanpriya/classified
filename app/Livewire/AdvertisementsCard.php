<?php

namespace App\Livewire;

use App\Models\Advertisement;
use Livewire\Component;

class AdvertisementsCard extends Component
{
    public Advertisement $advertisement;

    //mount
    public function mount()
    {
        //get all active advertisements order by publish date desc and status is 1
        $this->advertisement = (new Advertisement())
            ->newQuery()
            ->where('status', 1)
            ->orderBy('published_at', 'desc')
            ->get();
    }

    public function render()
    {
        return view('livewire.advertisements-card');
    }
}
