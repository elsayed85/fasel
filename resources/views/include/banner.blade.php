<!-- Slider Start -->
<section class="banner-container">
    <div class="movie-banner tvshows-slider">
        <div class="swiper-banner-container iq-rtl-direction" data-swiper="banner-detail-slider">
            <div class="swiper-wrapper">
                @foreach ($banner as $el)
                <div class="swiper-slide swiper-bg" style="background-repeat: no-repeat;background-size: cover;background : url({{ $el['photo'] }})">
                    <div class="shows-content h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-7 col-md-12">
                                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                                    data-delay-in="0.6">{{ $el['title'] }}</h1>
                                <div class="flex-wrap align-items-center fadeInLeft animated"
                                    data-animation-in="fadeInLeft" style="opacity: 1;">
                                    <div class="slider-ratting d-flex align-items-center ">
                                        <span class="text-white ml-3">{{ $el['rating'] }}</span>
                                    </div>
                                    <div class="d-flex align-items-center movie-banner-time">
                                        @foreach ($el['genres'] as $genre)
                                        <span class="trending-year">{{ $genre }}</span>
                                        <span class="mx-2 mx-md-3"><i class="ri-checkbox-blank-circle-fill"></i></span>
                                        @endforeach
                                    </div>
                                    @isset($el['releaseYear'])
                                    <p class="movie-banner-text" data-animation-in="fadeInUp" data-delay-in="1.2">
                                    <h3 class="slider-text big-title title text-uppercase"
                                        data-animation-in="fadeInLeft" data-delay-in="0.6">{{ $el['releaseYear'] }}</h3>
                                    </p>
                                    @endisset
                                </div>
                                <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp"
                                    data-delay-in="1.2">
                                    <a href="movie-details.html" class="btn btn-hover iq-button"><i
                                            class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-banner-button-next ">
                <i class="ri-arrow-left-s-line arrow-icon"></i>
            </div>
            <div class="swiper-banner-button-prev">
                <i class="ri-arrow-right-s-line arrow-icon"></i>
            </div>
        </div>
    </div>
</section>
