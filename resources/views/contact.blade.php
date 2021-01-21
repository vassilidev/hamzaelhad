<x-layouts.app>
    <x-slot name="header">
        <header class="page-header page-header-dark bg-dark">
            <div class="page-header-content pt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10 text-center">
                            <h1 class="page-header-title">
                                Contactez-nous
                            </h1>
                            <p class="page-header-text mb-5">
                                Avez-vous des questions? Nous sommes là pour vous aider!
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
            <div class="row mb-5">
                <div class="col-lg-4 mb-5 aos-init aos-animate" data-aos="fade-down">
                    <a class="card card-link border-top border-top-lg border-green lift text-center o-visible h-100"
                       href="https://api.whatsapp.com/send?phone=212661206634">
                        <div class="card-body">
                            <div class="icon-stack icon-stack-xl bg-primary-soft text-green mb-4 mt-n5 z-1 shadow">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </div>
                            <h5>WhatsApp</h5>
                            <p class="card-text">
                                Une réponse rapide
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="text-green font-weight-bold d-inline-flex align-items-center">Prendre contact
                               <i class="fas fa-arrow-right text-xs ml-1"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-5 aos-init aos-animate" data-aos="fade-up">
                    <a class="card card-link border-top border-top-lg border-secondary lift text-center o-visible h-100"
                       href="tel:+212 661-206634">
                        <div class="card-body">
                            <div
                                class="icon-stack icon-stack-xl bg-secondary-soft text-secondary mb-4 mt-n5 z-1 shadow">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <h5>Téléphone</h5>
                            <p class="card-text">+212 661-206634</p>
                        </div>
                        <div class="card-footer">
                            <div class="text-secondary font-weight-bold d-inline-flex align-items-center">Contactez
                                <i class="fas fa-arrow-right text-xs ml-1"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-5 aos-init aos-animate" data-aos="fade-down">
                    <a class="card card-link border-top border-top-lg border-teal lift text-center o-visible h-100"
                       href="#!">
                        <div class="card-body">
                            <div class="icon-stack icon-stack-xl bg-teal-soft text-teal mb-4 mt-n5 z-1 shadow">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h5>Media</h5>
                            <p class="card-text">Looking to contact our media team for a press release or related
                                story?</p>
                        </div>
                        <div class="card-footer">
                            <div class="text-teal font-weight-bold d-inline-flex align-items-center">Contact Media
                                <i class="fas fa-arrow-right text-xs ml-1"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
