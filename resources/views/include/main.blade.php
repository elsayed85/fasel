<!-- MainContent -->
<section id="iq-favorites" class="iq-rtl-direction">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 overflow-hidden">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="main-title">
                        أفلام
                    </h4>
                    <a href="{{ route('movies.index') }}" class="text-primary iq-view-all">
                        عرض الكل
                    </a>
                </div>
            </div>
        </div>
        <!-- Swiper -->
        <div class="favourite-slider">
            <div class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                <ul class="swiper-wrapper m-0 p-0">
                    @foreach ($movies as $movie)
                    <li class="swiper-slide slide-item">
                        <div class="block-images position-relative">
                            <div class="img-box">
                                <img src="{{ $movie['photo'] }}" class="img-fluid" alt=""
                                    style="width: -webkit-fill-available;height: 507px;">
                            </div>
                            <div class="block-description">
                                <h6 class="iq-title"><a href="movie-details.html">
                                        {{ $movie['title'] }} {{ $movie['releaseYear'] }}
                                    </a></h6>
                                @isset($movie['resolution'])
                                <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">{{ $movie['resolution'] }}</span>
                                </div>
                                @endisset
                                @isset($movie['genres'])
                                <div class="d-flex align-items-center movie-banner-time">
                                    @foreach ($movie['genres'] as $genre)
                                    <span class="trending-year">{{ $genre }}</span>@if(!$loop->last) / @endif
                                    @endforeach
                                </div>
                                @endisset
                                <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                        <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        شاهد الان
                                    </a>
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
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>
<section id="iq-favorites" class="iq-rtl-direction">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 overflow-hidden">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="main-title">
                        مسلسلات
                    </h4>
                    <a href="{{ route('tv.index') }}" class="text-primary iq-view-all">
                        عرض الكل
                    </a>
                </div>
            </div>
        </div>
        <!-- Swiper -->
        <div class="favourite-slider">
            <div class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                <ul class="swiper-wrapper m-0 p-0">
                    @foreach ($series as $serie)
                    <li class="swiper-slide slide-item">
                        <div class="block-images position-relative">
                            <div class="img-box">
                                <img src="{{ $serie['photo'] }}" class="img-fluid" alt=""
                                    style="width: -webkit-fill-available;height: 507px;">
                            </div>
                            <div class="block-description">
                                <h6 class="iq-title"><a href="movie-details.html">
                                        {{ $serie['title'] }}
                                    </a></h6>
                                <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">{{ $serie['resolution'] }}</span>
                                </div>
                                @isset($serie['genres'])
                                <div class="d-flex align-items-center movie-banner-time">
                                    @foreach ($serie['genres'] as $genre)
                                    <span class="trending-year">{{ $genre }}</span>@if(!$loop->last) / @endif
                                    @endforeach
                                </div>
                                @endisset
                                <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                        <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        شاهد الان
                                    </a>
                                </div>
                            </div>
                            <div class="block-social-info">
                                <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li>
                                        <span @if($serie['isFavorits'])
                                            style="background: var(--iq-primary);color: var(--iq-white);" @endif><i
                                                class="ri-heart-fill"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>

<section id="iq-favorites" class="iq-rtl-direction">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 overflow-hidden">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="main-title">
                        أنمي
                    </h4>
                    <a href="view-all.html" class="text-primary iq-view-all">
                        عرض الكل
                    </a>
                </div>
            </div>
        </div>
        <!-- Swiper -->
        <div class="favourite-slider">
            <div class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                <ul class="swiper-wrapper m-0 p-0">
                    @foreach ($animes as $anime)
                    <li class="swiper-slide slide-item">
                        <div class="block-images position-relative">
                            <div class="img-box">
                                <img src="{{ $anime['photo'] }}" class="img-fluid" alt=""
                                    style="width: -webkit-fill-available;height: 507px;">
                            </div>
                            <div class="block-description">
                                <h6 class="iq-title"><a href="movie-details.html">
                                        {{ $anime['title'] }}
                                    </a></h6>
                                @isset($anime['genres'])
                                <div class="d-flex align-items-center movie-banner-time">
                                    @foreach ($anime['genres'] as $genre)
                                    <span class="trending-year">{{ $genre }}</span>@if(!$loop->last) / @endif
                                    @endforeach
                                </div>
                                @endisset
                                <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                        <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        شاهد الان
                                    </a>
                                </div>
                            </div>
                            <div class="block-social-info">
                                <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li>
                                        <span @if($anime['isFavorits'])
                                            style="background: var(--iq-primary);color: var(--iq-white);" @endif><i
                                                class="ri-heart-fill"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>

<section id="iq-favorites" class="iq-rtl-direction">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 overflow-hidden">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="main-title">
                        برامج تلفزيونية
                    </h4>
                    <a href="view-all.html" class="text-primary iq-view-all">
                        عرض الكل
                    </a>
                </div>
            </div>
        </div>
        <!-- Swiper -->
        <div class="favourite-slider">
            <div class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                <ul class="swiper-wrapper m-0 p-0">
                    @foreach ($tvShows as $show)
                    <li class="swiper-slide slide-item">
                        <div class="block-images position-relative">
                            <div class="img-box">
                                <img src="{{ $show['photo'] }}" class="img-fluid" alt=""
                                    style="width: -webkit-fill-available;height: 507px;">
                            </div>
                            <div class="block-description">
                                <h6 class="iq-title"><a href="movie-details.html">
                                        {{ $show['title'] }}
                                    </a></h6>
                                @isset($show['resolution'])
                                <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">{{ $show['resolution'] }}</span>
                                </div>
                                @endisset
                                @isset($show['genres'])
                                <div class="d-flex align-items-center movie-banner-time">
                                    @foreach ($show['genres'] as $genre)
                                    <span class="trending-year">{{ $genre }}</span>@if(!$loop->last) / @endif
                                    @endforeach
                                </div>
                                @endisset
                                <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                        <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                        شاهد الان
                                    </a>
                                </div>
                            </div>
                            <div class="block-social-info">
                                <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li>
                                        <span @if($show['isFavorits'])
                                            style="background: var(--iq-primary);color: var(--iq-white);" @endif><i
                                                class="ri-heart-fill"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>
