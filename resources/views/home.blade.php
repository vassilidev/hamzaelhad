<x-layouts.app>
    <x-slot name="header">
        <header class="page-header page-header-dark bg-dark">
            <div class="page-header-content pt-10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 aos-init" data-aos="fade-down">
                            <h1 class="page-header-title">Hamza ELHAD</h1>
                            <p class="page-header-text mb-5">Pour les dropshippers et e-commerçants désireux d'atteindre
                                les 7
                                chiffres de C.A</p>
                            <a class="btn btn-yellow btn-marketing rounded-pill lift lift-sm" href="/nos-services">
                                Découvrir les services <i class="ml-2 fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block content-skewed content-skewed-left aos-init aos-animate"
                             data-aos="fade-up" data-aos-delay="50">
                            <img class="img-fluid content-skewed-item img-fluid shadow-lg rounded-lg"
                                 src="{{asset('img/banner.jpg')}}" width="500">
                        </div>
                    </div>
                </div>
            </div>
           <x-svg.rounded/>
        </header>
    </x-slot>
</x-layouts.app>
