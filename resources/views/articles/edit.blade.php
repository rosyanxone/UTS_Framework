<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title & Web Icon -->
        <title>EZ: Article</title>
        <link rel="shortcut icon" href="{{ asset('img/logo/black-ez.png') }}">

        {{-- Google Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;700&family=Roboto+Mono&display=swap" rel="stylesheet">
        
        {{-- CSS --}}
        
        <link rel="stylesheet" href="{{ asset('stylesheet/style.css') }}">
        <link rel="stylesheet" href="../stylesheet/style-foote.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body style="background-size: cover; background-image: url({{ asset('img/background/img-bg-2.jpg') }});">
        <div class="card mt-4 mb-4 d-flex justify-content-center align-items-center container">
            <div class="card-body d-flex flex-column" style="position: relative;">
                <div class="card-title"><h2>Ubah Artikel</h2></div>
                
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops!</strong> Ada yang salah dengan input anda.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('articles.update', $article->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Judul:</strong>
                                <input type="text" name="judul" value="{{ $article->judul }}" class="form-control" placeholder="Judul">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pt-4">
                            <div class="form-group">
                                <strong>Konten:</strong>
                                <textarea class="form-control" style="height:150px" name="konten" placeholder="Detail">{{ $article->konten }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pt-4">
                            <div class="form-group">
                                <strong>Kategori:</strong>
                                <select class="form-control" name="kategori">
                                    <option value="{{ $article->kategori }}" selected>{{ $article->kategori }}</option>
                                    <option value="TECH">Tech</option>
                                    <option value="FOOD">Food</option>
                                    <option value="SPORT">Sport</option>
                                    <option value="POLITIC">Politic</option>
                                    <option value="MUSIC">Music</option>
                                    <option value="MOVIE">Movie</option>
                                    <option value="HEALTH">Health</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pt-4">
                            <div class="form-group">
                                <strong>Waktu:</strong>
                                <input type="date" name="waktu" value="{{ $article->waktu }}" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        
                        <div class="row pt-3 d-grid gap-2" style="margin-left: 0px;">
                            <button type="submit" class="btn btn-warning text-white">Update</button>
                            <a class="btn btn-danger w-100" href="/articles">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>