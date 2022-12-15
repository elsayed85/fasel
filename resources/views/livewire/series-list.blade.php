<main id="main" class="site-main watchlist-contens">
    <div class="container-fluid">
        <div class="iq-main-header d-flex align-items-center justify-content-between mt-5 mt-lg-0">
            <h4 class="main-title">مسلسلات</h4>
        </div>
        <ul class=" row list-inline  mb-0 iq-rtl-direction ">
            @foreach ($series as $serie)
            <li class="slide-item col-lg-3 col-md-4 col-6 mb-4">
                <div class="block-images position-relative  watchlist-first">
                    <div class="img-box">
                        <img src="{{ $serie['photo'] }}" class="img-fluid" alt="" loading="lazy"
                            style="width: -webkit-fill-available;height: 507px;">
                    </div>
                    <div class="block-description">
                        <h6 class="iq-title text-left"><a href="genres-detail.html">{{ $serie['title'] }}</a></h6>
                        @isset($serie['releaseYear'])
                        <div class="movie-time d-flex align-items-center my-2">
                            <span class="text-white">{{ $serie['resolution'] }}</span>
                        </div>
                        @endisset
                        @isset($serie['genres'])
                        <div class="d-flex align-items-center movie-banner-time">
                            @foreach ($serie['genres'] as $genre)
                            <span class="trending-year">{{ $genre }}</span>@if(!$loop->last) / @endif
                            @endforeach
                        </div>
                        @endisset
                        <div class="hover-buttons text-left">
                            <a href="genres-detail.html" role="button" class="btn btn-hover"><i class="fa fa-play mr-1"
                                    aria-hidden="true"></i>
                                Play Now</a>
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
        @if($hasMore)
        <button class="btn btn-hover hide-me" type="button" wire:click="loadMore()">
            <span class="genres-btn">
                عرض المزيد
            </span>
            <div wire:loading>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="sr-only">Loading...</span>
            </div>
        </button>
        @endif
    </div>
</main>
