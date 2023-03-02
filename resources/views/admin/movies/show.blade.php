@extends('layouts.layout')
@section('content')

    <main>

        <div class="container-fluid mt-4">
            <!--prima row-->
            <div class="row">
                <div class="col-12 no-padding relative">
                    <div class="comic-thumb d-flex flex-row align-items-center">
                        <img src="{{$single_movie['cover_path']}}" alt="{{$single_movie['title']}}">
                        <div class="half-blue-tag">MOVIE</div>
                        <div class="small-blue-tag">VIEW GALLERY</div>
                    </div>
                    <div class="blue-bar"></div>
                </div>
            </div>
            <!--seconda row-->
            <div class="col-12">
                <div class="row bg-main">
                    <div class="col-12 d-flex flex-column align-items-center bg-white">
                        
                        <div class="row width-75">
                            <div class="col-8">

                                <h4 class="mt-5 darkblue">{{$single_movie['title']}}</h4>
                                <div class="green-bar d-flex justify-content-between my-3">
                                    <div class="d-flex align-items-center">
                                        <span class="mx-3">Titolo originale:</span>
                                        <span class="white">{{$single_movie['original_title']}}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="mx-3">Data di uscita</span>
                                        <div class="vertical-line"></div>
                                        <span class="white mx-3">{{$single_movie['release_date']}}</span>
                                    </div>
                                </div>
                                <p class="darkgray">Cast: {{$single_movie['cast']}}</p>

                            </div>
                        
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>


@endsection