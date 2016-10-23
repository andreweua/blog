@extends('home::layout')

<style>
    .index {
        background-color: #fafafa !important;
    }

    @media only screen and (max-width: 992px) {
        .container {
            width: 95%;
        }
    }

    @media only screen and (min-width: 993px) {
        .container {
            padding-left: 10px;
            width: 80% !important;
        }

    }

    .article-view article h1 {
        font-size: 41px;
        line-height: 50px;
    }
</style>
@section('content')
    <div class="container article-view">
        <div class="row">
            <div class="col s12 l10">
                <article class="col s12 l8 offset-l2">
                    <header>
                        <h1>{{$article->title}}</h1>
                        <div>
                            Por <strong>Douglas Zuqueto</strong>
                            - {{date('d/m/Y H:i', strtotime($article->created_at))}}
                        </div>
                    </header>
                    <div class="article-body">
                        <p>{{$article->subtitle}}</p>

                        <div class="article-image">
                            <img src="{{$article->image}}" alt="" width="100%">
                        </div>

                        <div class="article-content">
                            <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de
                                impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido
                                pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                                Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração
                                eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60,
                                quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais
                                recentemente quando passou a ser integrado a softwares de editoração eletrônica como
                                Aldus PageMaker.</p>

                            <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de
                                impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido
                                pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                                Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração
                                eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60,
                                quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais
                                recentemente quando passou a ser integrado a softwares de editoração eletrônica como
                                Aldus PageMaker.</p>

                            <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de
                                impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido
                                pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                                Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração
                                eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60,
                                quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais
                                recentemente quando passou a ser integrado a softwares de editoração eletrônica como
                                Aldus PageMaker.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>

    </div>

@endsection