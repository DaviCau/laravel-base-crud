<header>
    <div class="container header">
        <img src="{{ asset('img/dc-logo.png') }}" alt="logo dc">
  
        <div class="nav">
            <ul>
                @foreach ($headerLinks as $item)
                    <li>
                        <a :href="{{$item["url"]}}">{{$item["text"]}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="jumbotron" style="background-image: url('{{ asset("img/jumbotron.jpg") }}')"></div>
</header>