<footer class="footer pt-10 pb-5 mt-auto bg-light footer-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-brand">
                    <img src="{{asset('img/logo.png')}}" width="200" alt="">
                </div>
                <div class="mb-3">Expert en dropshipping</div>
                <div class="icon-list-social mb-5">
                    <a class="icon-list-social-link" href="#!">
                        <i class="fab fa-instagram text-pink"></i>
                    </a>
                    <a class="icon-list-social-link" href="#!">
                        <i class="fab fa-telegram text-cyan"></i>
                    </a>
                    <a class="icon-list-social-link" href="https://api.whatsapp.com/send?phone=212661206634">
                        <i class="fab fa-whatsapp text-green"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row justify-content-end">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <div class="text-uppercase-expanded text-xs mb-4 text-yellow">Pages</div>
                        <ul class="list-unstyled mb-0">
                            <x-footer.link to="{{ route('home') }}">
                                Accueil <i class="fas fa-home"></i>
                            </x-footer.link>
                            <x-footer.link to="{{ route('review') }}">
                                Les avis <i class="fas fa-star"></i>
                            </x-footer.link>
                            <x-footer.link to="{{ route('team') }}">
                                L'équipe <i class="fas fa-users"></i>
                            </x-footer.link>
                            <x-footer.link to="{{ route('contact') }}">
                                Contactez-nous <i class="fas fa-phone-alt"></i>
                            </x-footer.link>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="text-uppercase-expanded text-xs mb-4 text-yellow">Services</div>
                        <ul class="list-unstyled mb-0">
                            <x-footer.link to="{{ route('shopify') }}">
                                <i class="fab fa-3x text-green fa-shopify"></i>
                            </x-footer.link>
                            <x-footer.link to="{{ route('stripe') }}">
                                <i class="fab text-indigo-soft fa-stripe fa-3x"></i>
                            </x-footer.link>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-5"/>
        <div class="row align-items-center">
            <div class="col-md-6 small">Copyright {{ config('app.name') }} <i
                    class="fas fa-copyright"></i> {{ date('Y') }}</div>
            <div class="col-md-6 text-md-right small">
                <a href="https://vassili-joffroy.fr">Made with <i class="fas text-pink fa-heart"></i> by Vassili JOFFROY</a>
            </div>
        </div>
    </div>
</footer>
