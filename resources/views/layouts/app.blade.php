<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <title>@yield('title', 'Klinikadlamaszyn - Serwis maszyn do szycia i hafciarek')</title>
    <meta name="description" content="@yield('description', 'Serwis maszyn do szycia, hafciarek oraz maszyn i hafciarek komputerowych i eleketronicznych')">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Oliwier Głowala">
    <meta property="og:title" content="@yield('title', 'Klinikadlamaszyn - Serwis maszyn do szycia i hafciarek')" />
    <meta property="og:description" content="@yield('description', 'Serwis maszyn do szycia, hafciarek oraz maszyn i hafciarek komputerowych i eleketronicznych')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Charmonman&display=swap');
    </style>
    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Oliwier Głowala",
        "url": "{{ url()->current() }}"
    }
    </script>
</head>
<body>
@yield('content')
</body>

</html>
