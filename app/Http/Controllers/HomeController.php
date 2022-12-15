<?php

namespace App\Http\Controllers;

use App\Services\FaselApi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banner = (new FaselApi())->getBanner();
        $movies = (new FaselApi())->getHomeContent('movies');
        $series = (new FaselApi())->getHomeContent('Series');
        $animes = (new FaselApi())->getHomeContent('Anime');
        $tvShows = (new FaselApi())->getHomeContent('TVShows');

        return view('index' , [
            'banner' => $banner,
            'movies' => $movies,
            'series' => $series,
            'animes' => $animes,
            'tvShows' => $tvShows,
        ]);
    }
}
