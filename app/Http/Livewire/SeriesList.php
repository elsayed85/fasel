<?php

namespace App\Http\Livewire;

use App\Services\FaselApi;
use Livewire\Component;

class SeriesList extends Component
{
    public $page = 1;
    public $series = [];
    public $hasMore = true;
    public $category;

    public function loadSeries($page = 1)
    {
        $response = (new FaselApi())->getContents($this->category, $page, 8);
        $this->hasMore = (bool) $response['nextPage'];
        $this->series = array_merge($this->series, $response['result']);
    }

    public function mount($category)
    {
        $this->category = $category;
        $this->loadSeries();
    }

    public function render()
    {
        return view('livewire.series-list');
    }

    public function loadMore()
    {
        $this->page++;
        if ($this->hasMore) {
            $this->loadSeries($this->page);
        } else {
            $this->emit('noMoreSeries');
        }
    }
}
