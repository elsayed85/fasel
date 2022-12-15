@extends('layout')

@section('after_css')
<link href="{{ asset('css/video-js.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/videojs-resolution-switcher/0.4.2/videojs-resolution-switcher.css">
@endsection

@section('banner')
<section class="iq-main-slider site-video">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-0">
                    <video id="videoPlayer" class="video-js vjs-big-play-centered w-100"
                        controls
                        preload="auto"
                        autoplay
                        loop
                        muted
                        width="640" height="360"
                        poster="{{ $movie['photo'] }}">
                    </video>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
@section('content')
<div class="main-content movi ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="trending-info mt-4 pt-0 pb-4">
                    <div class="row">
                        <div class="col-md-9 col-12  mb-auto">
                            <div class="d-md-flex">
                                <h3 class="trending-text big-title text-uppercase mt-0 fadeInLeft animated"
                                    data-animation-in="fadeInLeft" data-delay-in="0.6"
                                    style="opacity: 1; animation-delay: 0.6s">{{ $movie['title'] }}
                                </h3>
                                <div class="slider-ratting d-flex align-items-center ml-md-3 ml-0">
                                    <ul
                                        class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-half" aria-hidden="true"></i></li>
                                    </ul>
                                    <span class="text-white ml-2">{{ $movie['imdb'] }}</span>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap align-items-center text-white text-detail flex-wrap mb-4">
                                <span class="badge badge-secondary font-size-16">{{ $movie['types'] }}</span>
                                <span class="ml-3 font-Weight-500 genres-info">{{ $movie['quality'] }}</span>
                                <span class="ml-3 font-Weight-500 genres-info">{{ $movie['country'] }}</span>
                                <span class="trending-year trending-year-list font-Weight-500 genres-info">{{
                                    $movie['releaseYear'] }}
                                </span>
                                <span
                                    class="trending-year trending-year-list single-view-count font-Weight-500 genres-info"><i
                                        class="fa fa-eye"></i>{{ $movie['views'] }} مشاهدة</span>
                            </div>
                            @if(count($movie['genres']))
                            <ul class="p-0 list-inline d-flex flex-wrap align-items-center mb-3 mt-4 iq_tag-list">
                                <li class="text-primary text-lable mr-3"><i class="fa fa-tags"
                                        aria-hidden="true"></i>الاقسام:
                                </li>
                                @foreach ($movie['genres'] as $genre)
                                <li class="trending-list mr-3"><a class="title" href="#">{{ $genre
                                        }},</a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        @if($movie['trailer'] != "-")
                        <div class="trailor-video col-md-3 col-12 mt-lg-0 mt-4 mb-md-0 mb-1 text-lg-right">
                            <a href="{{ $movie['trailer'] }}"
                                class="video-open playbtn block-images position-relative playbtn_thumbnail">
                                <img width="1920" style="height: 363px"
                                    src="{{ $movie['photo'] }}"
                                    class="attachment-medium-large size-medium-large wp-post-image" alt=""
                                    loading="lazy" sizes="(min-width: 960px) 75vw, 100vw" />
                                <span class="content btn btn-transparant iq-button">
                                    <i class="fa fa-play mr-2"></i>
                                    <span>الاعلان</span>
                                </span>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="streamit-content-details trending-info g-border iq-rtl-direction">
                    <ul class="trending-pills-header d-flex nav nav-pills align-items-center text-center  mb-5 justify-content-center"
                        role="tablist">
                        <li class="nav-item">
                            <a
                                class="nav-link {{ $select == "desc" ? "active show" : "" }}"
                                data-toggle="pill"
                                href="#dectripton-1"
                                role="tab"
                                aria-selected="{{ $select == "desc" ? "true" : "false"
                                }}">وصف الفيلم</a>
                        </li>
                        <li class="nav-item">
                            <a
                            class="nav-link {{ $select == "view_download" ? "active show" : "" }}"
                            data-toggle="pill"
                            href="#sourse-1"
                            role="tab"
                            aria-selected="{{ $select == "view_download" ? "true" : "false" }}">مصادر المشاهدة والتحميل</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="dectripton-1" class="tab-pane fade {{ $select == "view_download" ? "active show" : "" }}" role="tabpanel">
                            <div class="description-content">
                                <p>{{ $movie['description'] }}</p>
                            </div>
                        </div>

                        <div id="sourse-1" class="tab-pane fade {{ $select == "view_download" ? "active show" : "" }}" role="tabpanel">
                            <div class="source-list-content">
                                <table class="movie-sources sources-table">
                                    <thead class="trending-pills">
                                        <tr>
                                            <th class="genres-table-heading">الجودة</th>
                                            <th class="genres-table-heading">-</th>
                                        </tr>
                                    </thead>
                                    <tbody class="trending-pills">
                                        @foreach ($videos as $video)
                                        <tr>
                                            <td>{{ $video['label'] }}</td>
                                            <td>
                                                <a href="{{ route('movies.show' ,
                                                [   'id' => $id ,
                                                    'q' => $video['label'] ,
                                                    'select' => 'view_download'
                                                ]) }}"
                                                    class="play-source movie-play-source btn-hover iq-button"><i
                                                        class="ri-play-fill"></i>
                                                    عرض
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="s-margin iq-rtl-direction">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="main-title ">مقترحات </h4>
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <div class="favourite-slider">
                <div class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                    <ul class="swiper-wrapper m-0 p-0">
                        @foreach ($recommended as $recommended_movie)
                        <li class="swiper-slide slide-item">
                            <div class="block-images position-relative ">
                                <div class="img-box">
                                    <img src="{{ $movie['photo'] }}" class="img-fluid" alt="" loading="lazy"
                                        style="width: -webkit-fill-available;height: 507px;">
                                </div>
                                <div class="block-description">
                                    <h6 class="iq-title text-left"><a href="{{ route('movies.show' , $movie['id']) }}">{{ $movie['title'] }}</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                        <span class="text-white">
                                            @isset($movie['resolution'])
                                            {{ $movie['resolution'] }} -
                                            @endisset
                                            {{ $movie['releaseYear'] }}
                                        </span>
                                    </div>
                                    @isset($movie['genres'])
                                    <div class="d-flex align-items-center movie-banner-time">
                                        @foreach ($movie['genres'] as $genre)
                                        <span class="trending-year">{{ $genre }}</span>@if(!$loop->last) / @endif
                                        @endforeach
                                    </div>
                                    @endisset
                                    <div class="hover-buttons text-left">
                                        <a href="{{ route('movies.show' , $movie['id']) }}" role="button" class="btn btn-hover"><i class="fa fa-play mr-1"
                                                aria-hidden="true"></i>
                                            Play Now</a>
                                    </div>
                                </div>
                                <div class="block-social-info">
                                    <ul class="list-inline p-0 m-0 music-play-lists">
                                        <li>
                                            <span @if($movie['isFavorits'])
                                                style="background: var(--iq-primary);color: var(--iq-white);" @endif><i
                                                    class="ri-heart-fill"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section("before_js")
<!-- video.js -->
<script src="{{ asset('js/video.min.js') }}"></script>
@endsection
@section("after_js")
<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-resolution-switcher/0.4.2/videojs-resolution-switcher.min.js"></script>
<script>

var player = videojs('videoPlayer', {
controls: true,
poster: "images/slider/slider1.jpg",
plugins: {
    videoJsResolutionSwitcher: {
      default: {{ str_replace('p' , '' , request('q')) }},
      dynamicLabel: true
    }
}
});

player.updateSrc([
    @foreach ($videos as $video_el)
    @if($video_el['label'] != "Original")
    {
        src: '{{ $video_el['url'] }}',
        type: 'video/mp4',
        res: {{ str_replace('p' , '' , $video_el['label']) }},
        label: '{{ $video_el['label'] }}'
    },
    @endif
    @endforeach
])
</script>
@endsection
