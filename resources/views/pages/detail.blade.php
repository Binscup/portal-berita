@extends('layouts.app')

@section('content')
<main class="container">
    <div class="container p-4">
        <div class="row g-8">
            <div class="col-md-8">
                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">{{ $berita->judul }}</h2>
                    <p class="blog-post-meta">{{ $berita->created_at }} by <a href="#">Bintang</a></p>
                    <a href="/home">
                        <button type="button" class="btn btn-outline-primary mb-3">Back</button>
                    </a>
                    <img src="{{ asset('img/gambar/' . $berita->gambar) }}" class="mb-3 bd-placeholder-img card-img-top"
                        alt="">
                    {!! $berita->isi !!}
                </article>


            </div>
            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your
                            publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>

                    <div>
                        <h4 class="fst-italic">Recent posts</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777"></rect>
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Example blog post title</h6>
                                        <small class="text-body-secondary">January 15, 2023</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777"></rect>
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">This is another blog post title</h6>
                                        <small class="text-body-secondary">January 14, 2023</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <svg class="bd-placeholder-img" width="100%" height="96"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <rect width="100%" height="100%" fill="#777"></rect>
                                    </svg>
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                                        <small class="text-body-secondary">January 13, 2023</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-4">
                        <h4 class="fst-italic">Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection