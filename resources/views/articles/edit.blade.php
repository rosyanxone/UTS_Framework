@extends('articles.layout')

@section('content')
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
@endsection