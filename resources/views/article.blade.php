
@extends('articles.layout')

@section('content')
  <body id="article">
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-md navbar-fixed-top navbar-light main-nav">
      <div class="container article">
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
        <form action="{{ route('articles.destroy', $post->id) }}" class="update-delete" method="POST">
          <div class="row">
            <a class="btn btn-warning btn-crud" href="{{ route('articles.edit', $post->id) }}">UPDATE</a>
          </div>
          <div class="row">
            @csrf
            @method('DELETE')
              <button type="submit" class="btn btn-danger btn-crud">DELETE</button>
          </div>
        </form>
        <form class="d-flex" role="search">
          <div class="pull-right btn-create ">
            <a class="btn btn-primary btn-crud" style="margin-left: 5px; margin-right: 10px;" href="{{ route('articles.create') }}">CREATE</a>
          </div>

          <input class="form-control me-2 cari-icon" type="search" placeholder="Search" aria-label="Search">
          <button class="btn" type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </form>
      </div>
    </nav>
    {{-- END NAVBAR --}}

    {{-- MAIN CONTENT --}}
    <article>
      <div class="container content pt-3 mb-5">
        <h2>{{ $post->judul }}</h2>
        <div class="row">
          <div class="col">
            <div class="row">
              <img src="https://source.unsplash.com/600x400?{{ $post->kategori }}" class="h-100 w-100" alt="">
            </div>
            <div class="row mt-2 d-flex flex-start">
              <div class="d-flex flex-row">
                <div class="category-dishover text-white {{ strtolower($post->kategori) }}">{{ $post->kategori }}</div>
                <h5 class="mt-2" style="margin-left: 8px;"><i>Rilis: {{ $post->waktu }}</i></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-3">
          <div class="col">
            {!! $post->konten !!}
          </div>
        </div>
      </div>
    </article>
    {{-- END MAIN CONTENT --}}
      
      
    {{-- FOOTER --}}
    <footer style="background-color: #121212;">
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