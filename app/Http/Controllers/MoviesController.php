<?php

namespace App\Http\Controllers;

use App\Services\FaselApi;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $categories = (new FaselApi())->getHomeCategories(1);
        return view('movies.index', [
            'categories' => $categories,
            'selected_category' => request('category', 'movies')
        ]);
    }

    public function show($id)
    {
        $movie = (new FaselApi())->getContent($id);
        abort_unless($movie['postType'] == "movies", 404);
        $videos = (new FaselApi())->getVideosOf($movie['videoId']);
        $recommended = (new FaselApi())->getRecommendedContent($id);
        $select = request('select', 'desc');
        $selected_video = collect($videos)->first(function ($video) {
            return $video['label'] == request('q' , "720p");
        })['url'];
        return view('movies.show' , [
            'movie' => $movie,
            'videos' => $videos,
            'select' => $select,
            'id' => $id,
            'recommended' => $recommended,
            'selected_video' => $selected_video,
        ]);
    }
}
