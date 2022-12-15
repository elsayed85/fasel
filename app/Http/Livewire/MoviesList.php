<?php

namespace App\Http\Livewire;

use App\Services\FaselApi;
use Illuminate\Support\Collection;
use Livewire\Component;

class MoviesList extends Component
{
    public $page = 1;
    public $movies = [];
    public $hasMore = true;
    public $category;

    public function loadMovies($page = 1)
    {
        $response = (new FaselApi())->getContents($this->category, $page, 8);
        $this->hasMore = (bool) $response['nextPage'];
        $this->movies = array_merge($this->movies, $response['result']);
    }

    public function mount($category)
    {
        $this->category = $category;
        $this->loadMovies();
    }

    public function render()
    {
        return view('livewire.movies-list');
    }

    public function loadMore()
    {
        $this->page++;
        if ($this->hasMore) {
            $this->loadMovies($this->page);
        } else {
            $this->emit('noMoreMovies');
        }
    }
}
