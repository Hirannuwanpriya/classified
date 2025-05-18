<?php

namespace App\Livewire;

use App\Models\Advertisement;
use Livewire\Component;

class AdvertisementsCard extends Component
{
    public $advertisements = [];

    //mount
    public function mount()
    {
        //get all active advertisements order by publish date desc and status is 1
        $this->advertisement = (new Advertisement())
            ->newQuery()
            ->where('status', 1)
            ->orderBy('published_at', 'desc')
            ->take(10)
            ->get();
    }

    public function render()
    {
        return view('livewire.advertisements-card',
            [
                'advertisement' => $this->advertisement,
            ]
        );
    }
}
