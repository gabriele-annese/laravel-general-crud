@extends('layouts.main')

@section('main-content')
    <section class="homepage">
        <div class="container pt-5">
            <div class="row">
                <div class="col-6">
                    <div class="info-home">
                        <h1 class="title-main">
                            Best Jokes 2021
                        </h1>
                        <p class="home-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi velit at nemo accusantium quae expedita praesentium veritatis deleniti, maxime, sapiente necessitatibus? Aperiam at in laborum repudiandae molestias adipisci illum vitae?
                        </p>

                        <div class="btn-ctn">
                             <a href="{{route('jokes.create')}}" class="btn btn-color">
                                Create new Jokes
                            </a>
                            <a href="{{route('jokes.index')}}" class="btn btn-color">
                                Show Most Popular Jokes
                            </a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-6">
                    <div class="img-ctn">
                        <img src="{{asset('img/best_jokes.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection