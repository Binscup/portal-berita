<div class="container">
    <header class="border-bottom lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <h3>Portal Berita</h3>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-body-emphasis text-decoration-none" href="/home">
                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor"
                        class="bi bi-cloud-haze2-fill" viewBox="0 0 16 16">
                        <path
                            d="M8.5 2a5.001 5.001 0 0 1 4.905 4.027A3 3 0 0 1 13 12H3.5A3.5 3.5 0 0 1 .035 9H5.5a.5.5 0 0 0 0-1H.035a3.5 3.5 0 0 1 3.871-2.977A5.001 5.001 0 0 1 8.5 2m-6 8a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zM0 13.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5" />
                    </svg>
                </a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                        viewBox="0 0 24 24">
                        <title>Search</title>
                        <circle cx="10.5" cy="10.5" r="7.5"></circle>
                        <path d="M21 21l-5.2-5.2"></path>
                    </svg>
                </a>
                @guest()
                @if (Route::has('register'))
                <a class="btn btn-sm btn-outline-secondary mr-3" href="{{ route('register')}}">{{ __('Register') }}</a>
                @endif

                @if (Route::has('login'))
                <a class="btn btn-sm btn-outline-secondary ml-3" href="{{ route('login')}}">{{ __('Login') }}</a>

                @endif
                @endguest
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-between">
            <a class="nav-item nav-link link-body-emphasis active" href="#">World</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">U.S.</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Technology</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Design</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Culture</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Business</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Politics</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Opinion</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Science</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Health</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Style</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Travel</a>
        </nav>
    </div>
</div>