<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="css/home.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Charmonman&display=swap');
    .logo-span{
        font-family: 'Charmonman', cursive;
        font-size: 30px;
    }
    header{
        background-color: #f8f8fc !important;
    }
    .nav-link{
        color:#1b1c1c  !important;
        font-size: 14px;

    }
    body{
        background-color: #F3F4F6 !important;
    }
  </style>

<body>
    <x-navbar></x-navbar>
    <x-hero></x-hero>
    <x-cards></x-cards>
    <x-about></x-about>
    <x-contact></x-contact>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16/dist/smooth-scroll.polyfills.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 1000,
            speedAsDuration: true
        });
    });
</script>
</body>
</html>
