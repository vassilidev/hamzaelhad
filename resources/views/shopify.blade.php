<x-layouts.app>
    <x-slot name="header">
        <header class="page-header page-header-dark bg-dark">
            <div class="page-header-content pt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10 text-center">
                            <h1 class="page-header-title">
                                Shopify <img src="https://cdn.shopify.com/assets/images/logos/shopify-bag.png"
                                             style="width: 64px" alt="">
                            </h1>
                            <p class="page-header-text mb-5">
                                Créer votre boutique e-commerce
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <x-svg.rounded color="text-white"/>
        </header>
    </x-slot>

    <section class="mt-5">
        <div class="container">
            <div class="text-center">
                <p class="display-4">
                    Si vous recherchez non seulement un designer mais un vendeur expérimenté, vous êtes au bon concert !
                </p>
                <p class="lead">
                    En 2020, l'une des meilleures méthodes pour gagner de l'argent en ligne consiste à utiliser un
                    magasin
                    de produits de marque.
                </p>
            </div>
            <div class="card text-center text-decoration-none h-100 lift" href="#!">
                <div class="card-body py-5">
                    <div class="icon-stack icon-stack-lg bg-info-soft text-info mb-4">
                        <i class="fas fa-info"></i>
                    </div>
                    <h5>Le saviez vous ? </h5>
                    <p class="card-text small">
                        Plus de <b>78%</b> du succès dans une entreprise de livraison directe est d'avoir un site
                        Web professionnel de conversion? Séparez-vous de toute la concurrence avec notre service !!
                    </p>
                </div>
            </div>
            <div class="my-5 row no-gutters align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card pricing">
                        <div class="card-body p-5">
                            <div class="badge badge-dark badge-pill badge-marketing badge-sm text-white">
                                Bon plan
                            </div>
                            <div class="pricing-price">
                                2,999 <sup>DHS</sup>
                            </div>
                            <ul class="fa-ul pricing-list">
                                <li class="pricing-list-item">
                                <span class="fa-li">
                                     <i class="far fa-check-circle text-teal"></i>
                                </span>
                                    <span class="text-dark">
                                    Plus de 4 ans d'expérience
                                </span>
                                </li>
                                <li class="pricing-list-item">
                                <span class="fa-li">
                                    <i class="far fa-check-circle text-teal"></i>
                                </span>
                                    <span class="text-dark">
                                    Vous aide à trouver le créneau qui vous convient
                                </span>
                                </li>
                                <li class="pricing-list-item">
                                <span class="fa-li">
                                   <i class="far fa-check-circle text-teal"></i>
                                </span>
                                    <span class="text-dark">
                                    Trouvez vos produits à la mode qui convertissent, issus d'une industrie de confiance
                                </span>
                                </li>
                                <li class="pricing-list-item">
                                <span class="fa-li">
                                    <i class="far fa-check-circle text-teal"></i>
                                </span>
                                    <span class="text-dark">
                                    Conception de magasin avec un thème premium
                                </span>
                                </li>
                                <li class="pricing-list-item">
                                <span class="fa-li">
                                    <i class="far fa-check-circle text-teal"></i>
                                </span>
                                    <span class="text-dark">
                                    Descriptions de produits créées idéales avec des mots-clés ciblés
                                </span>
                                </li>
                                <li class="pricing-list-item">
                                <span class="fa-li">
                                    <i class="far fa-check-circle text-teal"></i>
                                </span>
                                    <span class="text-dark">
                                    Création de logo - Optimisation du référencement et de la vitesse de la pagek
                                </span>
                                </li>
                                <li class="pricing-list-item">
                                <span class="fa-li">
                                    <i class="far fa-check-circle text-teal"></i>
                                </span>
                                    <span class="text-dark">
                                    Plein effort
                                </span>
                                </li>
                                <li class="pricing-list-item">
                                <span class="fa-li">
                                    <i class="far fa-check-circle text-teal"></i>
                                </span>
                                    <span class="text-dark">
                                    Assistance à vie <sup>24/7</sup>
                                </span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer px-5">
                            <a class="d-flex align-items-center justify-content-between" href="{{route('contact')}}">
                                Acheter
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card pricing pricing-right bg-gray-800">
                        <div class="card-body p-5">
                            <div class="badge badge-yellow badge-marketing badge-pill badge-sm">
                                Personnalisé
                            </div>
                            <p class="card-text py-5">
                                Besoin d'un plan personnalisé? Contactez-nous directement et nous
                                pouvons travailler avec vous pour élaborer un plan qui répond aux besoins spécifiques de
                                votre entreprise.
                            </p>
                        </div>
                        <div class="card-footer bg-gray-900 px-5">
                            <a class="text-white-50 d-flex align-items-center justify-content-between"
                               href="/nous-contacter">
                                Contactez-nous
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="text-center">
                Commencez votre aventure de commerce électronique et obtenez des revenu passif dès aujourd'hui!
            </h2>
            <hr class="bg-yellow">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h4 class="text-yellow">
                        Contact
                    </h4>
                    <p class="lead mb-4">
                        Besoin d'une information ?
                    </p>
                </div>
                <div class="col-lg-6 text-lg-right">
                    <a class="btn btn-marketing btn-yellow rounded-pill lift" href="/nous-contacter">
                        Contactez-nous
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
