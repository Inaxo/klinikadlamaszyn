@extends('layouts.app')


@section('content')
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
@endsection
