<header>
    <div class="container header">
        <img src="{{ asset('img/dc-logo.png') }}" alt="logo dc">
  
        <div class="nav">
            <ul>
                <li>
                    <a href="{{ route("home") }}" class="{{ Route::currentRouteName()=='home' ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{ route("comics.index") }}" class="{{ Route::currentRouteName()=='comics.index' ? 'active' : '' }}">Comics</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="jumbotron" style="background-image: url('{{ asset("img/jumbotron.jpg") }}')"></div>
</header>