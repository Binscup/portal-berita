@extends('layouts.app')

@section('content')
<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="col-lg-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently
        about what’s most interesting in this post’s contents.</p>
    </div>
  </div>

  <div class="container mt-3">
    <div class="row row-cards">
      @foreach ($allBerita as $item)
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">{{ Str::limit($item->judul, 25, '...') }}</h3>
            <div class="mb-1 text-body-secondary">{{ $item->created_at->format('F j, Y') }}</div>
            <p class="card-text mb-auto">{!! Str::words($item->isi, 30, '...') !!}</p>
            <a href="{{ route('detail', $item->id) }}" class="icon-link gap-1 icon-link-hover stretched-link">
              Continue reading
              <svg class="bi">
                <use xlink:href="#chevron-right"></use>
              </svg>
            </a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="{{asset ('img/gambar/' . $item->gambar) }}" width="200" height="250" alt="">
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</main>
@endsection
