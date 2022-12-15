<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = '';
    public $pagesize = 7;

    public function render()
    {
        $searchResults = [];
        $totalCount = 0;

        if (strlen($this->search) >= 2) {
            $response = Http::fasel()->post(
                "Content/ContentSearch",
                [
                    "data" => [
                        "pageNumber" => 1,
                        "data" => [
                            "searchText" => $this->search
                        ],
                        "pageSize" => $this->pagesize
                    ]
                ]
            )->json();

            if ($response['statusCode'] == 1) {
                $result = $response['result'];
                $totalCount = $result['totalCount'] ?? 0;
                $searchResults = $result['result'];
            }
        }



        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults),
            'totalCount' => $totalCount
        ]);
    }
}
