@extends('blog::layout')

@section('content')
    <div class="container articles">
        <div class="row">
            <section class="col s12 l8">
                <h1>Artigos</h1>

                @foreach($articles as $article)
                    <article class="article">
                        <div class="col s12">
                            <div class="row article-header">
                                <div class="col s12">
                                    <h2>
                                        <a href="{{$article->url}}" class="card-title"> {{$article->title}} </a>
                                    </h2>
                                </div>
                                <div class="col s12 center">
                                    <a href="{{$article->url}}">
                                        <img src="{{$article->image}}" class="responsive-img">
                                    </a>
                                </div>
                                <div class="col s12 subtitle">
                                    <p>{{$article->subtitle}}</p>
                                </div>
                            </div>
                            {{--<div class="col s12">--}}
                            {{--<div class="row right ">--}}
                            {{--<div class="chip grey lighten-3">--}}
                            {{--<a href="" class="blue-text">ESP8266</a>--}}
                            {{--</div>--}}
                            {{--<div class="chip grey lighten-3">--}}
                            {{--<a href="" class="blue-text">IoT</a>--}}
                            {{--</div>--}}
                            {{--<div class="chip grey lighten-3">--}}
                            {{--<a href="" class="blue-text">MQTT</a>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </article>
                @endforeach

            </section>
            {{--<div class="col l4">--}}
                {{--<div class="row">--}}
                    {{--<h2>Últimos artigos</h2>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

    </div>

@endsection