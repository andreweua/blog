@extends('admin::layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col l12">
                <h5>Imagens Artigo: {{$item->title}}</h5>

                <form class="col l12" action="{{route('admin.articles.imagesSave', ['id' => $item->id])}}"
                      method="POST"
                      enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="title" value="{{$item->title}}">

                    <div class="row">
                        <div class="input-field col l6">
                            <input type="text" name="image_name" id="image_name" value="{{$item->title}}">
                            <label for="image_name" class="active">Nome</label>

                        </div>
                        <div class="file-field input-field col l6">
                            <input type="file" name="image" id="image">
                            <label for="image" class="active">Imagem</label>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col l12">
                            <button class="btn green right" type="submit">Enviar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="row">
            <div class="col l12">
                @foreach($item->images as $image)
                    <div class="col s12 m7 l2">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{$image->image_url}}">
                            </div>
                            <div class="card-content">
                                <p>{{$image->image_name}}</p>
                                <a class="removeImage" href="" data-id="{{$image->id}}">
                                    <i class="material-icons red-text">delete</i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('admin::articles._includes.btn-floating', [
  'btns' => [
              [
                  'href' => route('admin.articles.index') ,
                  'icon' => 'comment',
                  'color' => 'blue'
              ],
              [
                  'href' => route('admin.articles.create') ,
                  'icon' => 'save',
                  'color' => 'green'
              ],
              [
                  'href' => route('admin.articles.shedule') ,
                  'icon' => 'alarm_on',
                  'color' => 'red'
              ],
              [
                  'href' => route('admin.articles.images', ['id' => $item->id]),
                  'icon' => 'picture_in_picture',
                  'color'=> 'yellow'
              ]
          ]
  ])

    <script>
        $(document).ready(function () {
            $('.modal-trigger').leanModal({
                starting_top: '100%'
            });
        });
    </script>

@endsection