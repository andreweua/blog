<form action="{{route('blog.articles.searchByInput')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="input-field col s12 m6 l12">
        <input id="search" type="text" name="search" placeholder="Digite para buscar" required>
    </div>
</form>

