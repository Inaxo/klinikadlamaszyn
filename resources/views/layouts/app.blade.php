<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <title>@yield('title', 'Klinikadlamaszynn - Serwis maszyn do szycia i hafciarek')</title>
    <meta name="description" content="@yield('description', 'Serwis maszyn do szycia, hafciarek oraz maszyn i hafciarek komputerowych i eleketronicznych')">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Oliwier Głowala">
    <meta property="og:title" content="@yield('title', 'Twoje portfolio - Oliwier Głowala')" />
    <meta property="og:description" content="@yield('description', 'Oliwier Głowala - portfolio zawierające wszystkie moje projekty, itp.')" />
    <meta property="og:url" content="{{ url()->current() }}" />
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

</body>

</html>