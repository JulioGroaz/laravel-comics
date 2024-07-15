<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-comics</title>

    @vite('resources/js/app.js')
</head>
<body>

    @extends('layout.app')

@section('header-content')
<header class="header-container">
    <img src="/img/dc-logo.png" alt="">
    <ul class="header-list">
        <li>CHARACTERS</li>
        <li>COMICS</li>
        <li>MOVIES</li>
        <li>TV</li>
        <li>GAMES</li>
        <li>COLLECTIBLES</li>
        <li>VIDEOS</li>
        <li>FANS</li>
        <li>NEWS</li>
        <li>SHOP</li>
    </ul>
</header>
@endsection

@section('main-content')
<section class="list-products">
    <div class="cards">
        <article class="card" v-for="(card, index) in cardsList" :key="index">
            <img :src="card.thumb" :alt="card.series">
            <p></p>
        </article>
    </div>
</section>
@endsection

@section('footer-content')
<footer class="footer-info">
    <section class="list-services">
        <div class="list-row">
            <section>
                <ul>
                    <li><h2>DC COMICS</h2></li>
                    <li class="list-services-style">characters</li>
                    <li class="list-services-style">Comics</li>
                    <li class="list-services-style">Movies</li>
                    <li class="list-services-style">TV</li>
                    <li class="list-services-style">Games</li>
                    <li class="list-services-style">Videos</li>
                    <li class="list-services-style">News</li>
                </ul>
                <ul>
                    <li><h2>SHOP</h2></li>
                    <li class="list-services-style">Shop DC</li>
                    <li class="list-services-style">Shop DC Collectibles</li>
                </ul>
            </section>
            <section>
                <ul>
                    <li><h2>DC</h2></li>
                    <li class="list-services-style">Term of Use</li>
                    <li class="list-services-style">Privacy Policy (New)</li>
                    <li class="list-services-style">Ad Choices</li>
                    <li class="list-services-style">Advertising</li>
                    <li class="list-services-style">Jobs</li>
                    <li class="list-services-style">Subscriptions</li>
                </ul>
            </section>
            <section>
                <ul>
                    <li><h2>SITES</h2></li>
                    <li class="list-services-style">DC</li>
                    <li class="list-services-style">MAD magazine</li>
                    <li class="list-services-style">DC Kids</li>
                    <li class="list-services-style">DC Universe</li>
                    <li class="list-services-style">DC Power Visa</li>
                </ul>
            </section>
        </div>
        <img src="/img/dc-logo-bg.png" alt="" class="logo-bg">
    </section>
    <div class="footer-socials">
        <button>SIGN-UP NOW!</button>
        <ul class="social-list">
            <li><h3><strong>FOLLOW US</strong></h3></li>
            <li><img src="/img/footer-facebook.png" alt=""></li>
            <li><img src="/img/footer-twitter.png" alt=""></li>
            <li><img src="/img/footer-pinterest.png" alt=""></li>
            <li><img src='/img/footer-youtube.png' alt=""></li>
            <li><img src="/img/footer-periscope.png" alt="maps"></li>
        </ul>
    </div>
</footer>
@endsection


</body>
</html>
