<x-layouts.app>
    <x-slot name="header">
        <header class="page-header page-header-dark bg-dark">
            <div class="page-header-content pt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10 text-center">
                            <h1 class="page-header-title">
                                Ce qu'ils disent sur nous
                            </h1>
                            <p class="page-header-text mb-5">
                                Découvrez les meilleurs avis de nos clients
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <x-svg.rounded color="text-white"/>
        </header>
    </x-slot>

    <section class="bg-white py-10">
        <div class="container">
            <div class="row mb-10">
                @foreach(\App\Models\Review::all() as $index => $review)
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="testimonial p-lg-5">
                            <div class="testimonial-name">
                                @for ($i = 0; $i < $review->star; $i++)
                                    <span class="text-yellow">
                                        <i class="fas fa-star"></i>
                                    </span>
                                @endfor
                            </div>
                            <p class="testimonial-quote text-dark">
                                {{ $review->content }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layouts.app>
