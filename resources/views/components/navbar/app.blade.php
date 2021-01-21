<nav class="navbar navbar-marketing navbar-expand-lg bg-light navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand text-yellow" href="{{route('home')}}">
            <img src="{{asset('img/logo.png')}}" alt="" style="height: 3rem;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-lg-5">
                <x-navbar.link to="{{ route('review') }}">
                    Avis <i class="fas fa-star"></i>
                </x-navbar.link>
                <x-navbar.link to="{{ route('team') }}">
                    L'équipe <i class="fas fa-users"></i>
                </x-navbar.link>
                <x-navbar.link to="{{ route('services') }}">
                    Services <i class="fas fa-money-bill"></i>
                </x-navbar.link>
            </ul>
            <a class="btn-yellow btn rounded-pill px-4 ml-lg-4" href="">
                Contact <i class="fas fa-lg fa-phone-alt"></i>
            </a>
        </div>
    </div>
</nav>
