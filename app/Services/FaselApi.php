<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;


class FaselApi
{
    public $api;
    private $user_id = 383616;

    public function __construct()
    {
        $this->api = Http::baseUrl(config('services.fasel.url'))
            ->withToken(config('services.fasel.token'));
    }

    public function getCategories()
    {
        $response = $this->api->get("Category/GetCategories")->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result'];
    }

    public function getHomeCategories($CategoryMainId)
    {
        if (!in_array($CategoryMainId, [1, 2, 3, 4])) {
            return null;
        }

        $response = $this->api->get("Category/GetHomeCategories?CategoryMainId={$CategoryMainId}")->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result'];
    }

    public function getBanner()
    {
        $response = $this->api->get("Content/GetBanner")->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result'];
    }

    public function getContents($subCategoryName , $pageNumber = 1, $pageSize = 16 , $mainCategoryId = 0)
    {
        $response = $this->api->post("Content/GetContents" , [
            "data" => [
                "pageNumber" => $pageNumber,
                "pageSize" => $pageSize,
                "data" => [
                    "mainCategoryId" => $mainCategoryId,
                    "subCategoryName" => $subCategoryName
                ]
            ]
        ])->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result'];
    }

    public function getContent($id)
    {
        $response = $this->api->get("Content/GetContent?ContentId={$id}&UserId={$this->user_id}")->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result'];
    }

    public function getHomeContent($category_name , $category_id = 0)
    {
        $response = $this->api->post("Content/GetHomeContent" , [
            "data" => [
                "subCategoryName" => $category_name,
                "mainCategoryId" => $category_id
            ]
        ])->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result'];
    }

    public function getRecommendedContent($id)
    {
        $response = $this->api->get("Content/GetRecommendedContent?ContentId={$id}&UserId={$this->user_id}")->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result'];
    }

    public function getComments($id)
    {
        $response = $this->api->get("Content/GetComments?ContentId={$id}")->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result'];
    }

    public function addComment($comment , $contentId)
    {
        $response = $this->api->post("Content/AddNewComment" , [
            "data" => [
                "userId" => $this->user_id,
                "comment" => $comment,
                "contentId" => $contentId,
                // "title" => ""
            ]
        ])->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result'];
    }

    public function addToWatchlist($contentId)
    {
        $response = $this->api->post("WatchList/PostWatchList" , [
            "data" => [
                "userId" => $this->user_id,
                "contentId" => $contentId,
            ]
        ])->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result'];
    }

    public function removeFromWatchlist($contentId)
    {
        $response = $this->api->delete("WatchList/PostWatchList" , [
            "data" => [
                "userId" => $this->user_id,
                "contentId" => $contentId,
            ]
        ])->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result'];
    }

    public function getVideosOf($video_id)
    {
        $response = $this->api->get("Video/Stream?video_id={$video_id}&userId={$this->user_id}")->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result']['data']['mp4'];
    }

    public function getVideoDownloadLink($video_id)
    {
        $response = $this->api->get("Video/Download?video_id={$video_id}&userId={$this->user_id}")->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result']['data']['mp4'];
    }

    public function search($query, $page_number = 1, $page_size = 7)
    {
        $response = $this->api->post(
            "Content/ContentSearch",
            [
                "data" => [
                    "pageNumber" => $page_number,
                    "data" => [
                        "searchText" => $query
                    ],
                    "pageSize" => $page_size
                ]
            ]
        )->json();

        if ($response['statusCode'] == 0) {
            return null;
        }

        return $response['result'];
    }
}
