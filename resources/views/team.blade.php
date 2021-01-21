<x-layouts.app>
    <x-slot name="header">
        <header class="page-header page-header-dark bg-dark">
            <div class="page-header-content pt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10 text-center">
                            <h1 class="page-header-title">
                                L'équipe
                            </h1>
                            <p class="page-header-text mb-5">
                                Découvrez les partenaires de votre réussite.
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
            <div class="row">
                @foreach(\App\Models\User::all() as $user)
                    <div class="col-12">
                        <p class="post-archive-item">
                            {{ $user->bio }}
                        </p>
                        <div class="post-archive-meta">
                            <img class="post-archive-meta-img" src="{{ asset('img/avatar/' . $user->avatar) }}">
                            <div class="post-archive-meta-details">
                                <div class="post-archive-meta-details-name text-yellow font-weight-bold">
                                    {{ $user->name }}
                                </div>
                                <div class="post-archive-meta-details-date">
                                    {{ $user->title }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="col-2 border-yellow">
                @endforeach
            </div>
        </div>
    </section>

</x-layouts.app>
