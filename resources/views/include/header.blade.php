<!-- Header -->
<header id="main-header">
    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <div class="navbar-toggler-icon" data-toggle="collapse">
                                <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                            </div>
                        </a>
                        <a class="navbar-brand" href="index-2.html"> <img class="img-fluid logo"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/1280px-Netflix_2015_logo.svg.png"
                                alt="Netflix" /> </a>

                        <div class="mobile-more-menu">
                            <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                                data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-line"></i>
                            </a>
                            <div class="more-menu" aria-labelledby="dropdownMenuButton">
                                <div class="navbar-right position-relative">
                                    <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                        <li>
                                            <a href="#" class="search-toggle">
                                                <i class="ri-search-line"></i>
                                            </a>
                                            <div class="search-box iq-search-bar">
                                                <form action="#" class="searchbox">
                                                    <div class="form-group position-relative">
                                                        <input type="text" class="text search-input font-size-12"
                                                            placeholder="type here to search...">
                                                        <i class="search-link ri-search-line"></i>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="menu-main-menu-container">
                                <ul id="top-menu" class="navbar-nav ml-auto">
                                    <li class="menu-item">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="menu-item  active">
                                        <a href="{{ route('movies.index') }}">Movies</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('tv.index') }}">Tv Shows</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
