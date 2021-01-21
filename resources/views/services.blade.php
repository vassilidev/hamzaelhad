<x-layouts.app>
    <x-slot name="header">
        <header class="page-header page-header-dark bg-dark">
            <div class="page-header-content pt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10 text-center">
                            <h1 class="page-header-title">
                                Nos services
                            </h1>
                            <p class="page-header-text mb-5">
                                Découvrez les meilleurs services pour gagner de l'argent
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <x-svg.rounded color="text-white"/>
        </header>
    </x-slot>

    <section class="py-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 z-1 mb-5 mb-lg-n5 aos-init" data-aos="fade-up">
                    <a class="card text-decoration-none h-100 lift" href="/service/shopify">
                        <div class="card-body py-5">
                            <div class="d-flex align-items-center">
                                <img src="https://cdn.shopify.com/assets/images/logos/shopify-bag.png" class="img-fluid"
                                     width="80" alt="">
                                <div class="ml-4">
                                    <h5 class="text-primary">Shopify</h5>
                                    <p class="card-text text-gray-600">Créez votre propre site e-commerce en quelques
                                        clics
                                        avec Shopify. Lancez votre activité et vendez en ligne facilement. Lancez-vous
                                        !</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 z-1 mb-10 mb-lg-n5 aos-init" data-aos="fade-up">
                    <a class="card text-decoration-none h-100 lift" href="/service/stripe">
                        <div class="card-body py-5">
                            <div class="d-flex align-items-center">
                                <img src="https://i.pinimg.com/originals/8f/c6/a2/8fc6a20dd42803d99e5f782d03916991.gif"
                                     class="img-fluid" width="80" alt="">
                                <div class="ml-4">
                                    <h5 class="text-secondary">Stripe</h5>
                                    <p class="card-text text-gray-600">Traitement des paiements en ligne pour les
                                        entreprises sur Internet</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-light">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
                 fill="currentColor">
                <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
            </svg>
        </div>
    </section>

</x-layouts.app>
