<?php

namespace App\Http\Controllers;

use App\Services\FaselApi;
use Illuminate\Http\Request;

class TvController extends Controller
{
    public function index()
    {
        $categories = (new FaselApi())->getHomeCategories(2);
        return view('tv.index', [
            'categories' => $categories,
            'selected_category' => request('category', 'series')
        ]);
    }

    public function show($id)
    {
        return view('tv.show');
    }
}
