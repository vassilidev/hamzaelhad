<nav class="navbar navbar-marketing navbar-expand-lg bg-transparent navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand text-white" href="index.html">SB UI Kit Pro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-lg-5">
                <x-navbar.link to="{{ route('home') }}">
                    Avis <i class="fas fa-home"></i>
                </x-navbar.link>
                <x-navbar.link to="{{ route('home') }}">
                    L'équipe <i class="fas fa-users"></i>
                </x-navbar.link>
                <x-navbar.link to="{{ route('home') }}">
                    Contact <i class="fas fa-phone-alt"></i>
                </x-navbar.link>
            </ul>
        </div>
    </div>
</nav>
