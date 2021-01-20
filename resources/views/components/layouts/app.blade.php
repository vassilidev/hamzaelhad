<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">
    @stack('css')
</head>
<body>
<div id="layoutDefault">
    <div id="layoutDefault_content">
        <main>
            <x-navbar.app/>

            {{ $header ?? '' }}

            {{ $slot }}
        </main>
    </div>
    <div id="layoutDefault_footer">
        <x-footer.app/>
    </div>
</div>
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@stack('js')
</body>
</html>
