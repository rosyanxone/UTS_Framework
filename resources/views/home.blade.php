@php use App\Models\Article; @endphp

@extends('articles.layout')


@section('content')
  <body id="home">
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark main-nav pb-4">
        <div class="container home">
            <a class="navbar-brand" href="/articles">EZ Article</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#coming-soon">Tech</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#coming-soon">Food</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#coming-soon">Sport</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#coming-soon">Politic</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#coming-soon">Music</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#coming-soon">Movie</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#coming-soon">Health</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
              <div class="pull-right btn-create ">
                  <a class="btn btn-primary btn-crud" href="{{ route('articles.create') }}">CREATE</a>
              </div>
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="margin-left: 5px;">
              <button class="btn" type="submit">
                <i class="fa-solid fa-magnifying-glass text-light"></i>
              </button>
            </form>
        </div>
    </nav>
    {{-- END NAVBAR --}}

    @if ($message = Session::get('success'))
      <div class="container">
        <div class="alert alert-dark" style="padding: 20px;">
          <i class="fa-solid fa-circle-check"></i>
          {{ $message }}
        </div>
      </div>
    @endif
    
    {{-- HEADER --}}
    <header>
      <div class="container header-content pb-5">
        {{-- Baris Atas --}}
        <div class="row pb-4">
          <h2>TRENDING</h2>

          <div class="col-8 news">
            @php
              $id = $posts->random()->id;
            @endphp
            <div class="layer">
              <ul>
                <li class="pb-2">
                  <a href="/article/{{ $posts[$id]->slug }}">
                    <div class="category {{ strtolower($posts[$id]->kategori) }}">{{ $posts[$id]->kategori }}</div>
                  </a>
                </li>
                <li>
                  <h4>{{ $posts[$id]->waktu }}</h4>
                </li>
                <li>
                  <a href="/article/{{ $posts[$id]->slug }}">
                    <h3>{{ $posts[$id]->judul }}</h3>
                  </a>
                </li>
              </ul>
            </div>
            <a href="/article/{{ $posts[$id]->slug }}">
              <img src='https://source.unsplash.com/600x400?{{ $posts[$id]->kategori }}' class="h-100 w-100 lg-img" alt="">
            </a>
          </div>

          <div class="col-4">

            <div class="row pb-4">
              <div class="col news">
                <div class="layer md-layer">
                  <ul>
                    <li class="pb-2">
                      @php
                        $id = $posts->random()->id;
                      @endphp
                      <a href="/article/{{ $posts[$id]->slug }}">
                        <div class="category {{ strtolower($posts[$id]->kategori) }}">{{ $posts[$id]->kategori }}</div>
                      </a>
                    </li>
                    <li>
                      <h4>{{ $posts[$id]->waktu }}</h4>
                    </li>
                    <li>
                      <a href="/article/{{ $posts[$id]->slug }}">
                        <h3>{{ $posts[$id]->judul }}</h3>
                      </a>
                    </li>
                  </ul>
                </div>
                <a href="/article/{{ $posts[$id]->slug }}">
                  <img src='https://source.unsplash.com/600x400?{{ $posts[$id]->kategori }}' class="h-100 w-100 md-img" alt="">
                </a>
              </div>
            </div>

            <div class="row">
              <div class="col news">
                <div class="layer md-layer">
                  <ul>
                    <li class="pb-2">
                      @php
                        $id = $posts->random()->id;
                      @endphp
                      <a href="/article/{{ $posts[$id]->slug }}">
                        <div class="category {{ strtolower($posts[$id]->kategori) }}">{{ $posts[$id]->kategori }}</div>
                      </a>
                    </li>
                    <li>
                      <h4>{{ $posts[$id]->waktu }}</h4>
                    </li>
                    <li>
                      <a href="/article/{{ $posts[$id]->slug }}">
                        <h3>{{ $posts[$id]->judul }}</h3>
                      </a>
                    </li>
                  </ul>
                </div>
                <a href="/article/{{ $posts[$id]->slug }}">
                  <img src='https://source.unsplash.com/600x400?{{ $posts[$id]->kategori }}' class="h-100 w-100 md-img" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>

        {{-- Baris Bawah --}}
        <div class="row">
          @foreach ($posts->shuffle()->take(3) as $post)
            <div class="col-4 news">
              <div class="layer md-layer w-100">
                <ul>
                  <li class="pb-2">
                    <a href="/article/{{ $post->slug }}">
                      <div class="category {{ strtolower($post->kategori) }}">{{ $post->kategori }}</div>
                    </a>
                  </li>
                  <li>
                    <h4>{{ $post->waktu }}</h4>
                  </li>
                  <li>
                    <a href="/article/{{ $post->slug }}">
                      <h3>{{ $post->judul }}</h3>
                    </a>
                  </li>
                </ul>
              </div>
              <a href="/article/{{ $post->slug }}" class="w-100">
                <img src='https://source.unsplash.com/600x400?{{ $post->kategori }}' class="h-100 w-100 md-img" alt="">
              </a>
            </div>
          @endforeach
        </div>

      </div>

    </header>
    {{-- END HEADER --}}

    {{-- MAIN CONTENT --}}
    <section>
      <div class="container main-content pt-4 pb-5">
        <article>
          <div class="row">
            <h2>TERBARU</h2>
            @foreach ($articles as $article)
              <div class="col-3">
                <a href="/article/{{ $article->slug }}" class="card">
                  <img src='https://source.unsplash.com/600x400?{{ $article->kategori }}' class="sm-img" alt="">
                  <div class="card-body">
                    <h4 class="card-text">{{ $article->waktu }}</h4>
                    <h3 class="card-title">{{ $article->judul }}</h3>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
        </article>
        @if($articles->hasPages())
          <div class="card-footer">
            {{ $articles->links() }}
          </div>
        @endif
      </div>
    </section>
    {{-- END MAIN CONTENT --}}

    {{-- FOOTER --}}
    <footer>
      <div class="container footer-container">
        <div class="footer-item d-flex flex-row justify-content-between pt-5">
          <div class="logo-slogan">
            <div class="logo">
              <a href="/articles">
                <img src="../img/logo/logo-footer.png" alt="">
              </a>
            </div>
            <div class="slogan">
              <p class="">The Most Engaging Media For Millenials and Gen-Z</p>
            </div>
          </div>
          <div class="icon-copyright pt-1">
            <div class="icons">
              <a href="https://www.twitter.com/ez-article">
                <i class="fa-brands fa-twitter"></i>
              </a>
              <a href="https://www.tiktok.com/ez-article">
                <i class="fa-brands fa-tiktok"></i>
              </a>
              <a href="https://www.youtube.com/ez-article">
                <i class="fa-brands fa-youtube"></i>
              </a>
              <a href="https://www.whatsapp.com/ez-article">
                <i class="fa-brands fa-whatsapp"></i>
              </a>
              <a href="https://www.instagram.com/ez-article">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="https://www.facebook.com/ez-article">
                <i class="fa-brands fa-facebook"></i>
              </a>
            </div>
            <div class="copyright">
              <p>Copyright © 2022 PT. EZ Media Indonesia. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    {{-- END FOOTER --}}

    <script src="https://kit.fontawesome.com/a374d5ed26.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
@endsection