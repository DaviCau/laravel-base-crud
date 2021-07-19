<header>
    <div class="container header">
        <img src="{{ asset('img/dc-logo.png') }}" alt="logo dc">
  
        <div class="nav">
            <ul>
                {{-- <li v-for="(link, index) in links" :key=index>
                    <a :href="link.url" :class="link.current ? 'active' : ''">{{link.text}}</a>
                </li> --}}
            </ul>
        </div>
    </div>
    <div class="jumbotron" style="background-image: url('{{ asset("img/jumbotron.jpg") }}')"></div>
</header>