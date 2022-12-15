<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModels\MovieViewModel;
use App\ViewModels\MoviesViewModel;
use App\ViewModels\TvShowViewModel;
use Illuminate\Support\Facades\Http;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::fasel()->get('Content/GetContent?ContentId=194619&UserId=383616')->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = Http::fasel()->get("Content/GetContent?ContentId={$id}&UserId=383616")->json();
        abort_unless($response['statusCode'] == 1, 404);

        $result = $response['result'];

        if ($result['postType'] == 'movies') {
            $viewModel = new MovieViewModel($result);
            $video_id = $viewModel->movie['videoId'];

            $videos_response = Http::fasel()->get("Video/Stream?video_id={$video_id}&userId=383616")->json();
            abort_unless($videos_response['statusCode'] == 1, 404);

            $viewModel->movie['videos'] = $videos_response['result']['data']['mp4'];

            return view('movies.show', $viewModel);
        } elseif ($result['postType'] == 'series') {
            $viewModel = new TvShowViewModel($result);
            return view('tv.show', $viewModel);
        }
    }
}
