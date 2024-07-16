

@extends('layout.app')

@section('header-content')
<header class="header-container">
    <img src="/img/dc-logo.png" alt="DC Logo">
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
        @foreach ($data as $card)
        <article class="card">
            <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
            <p>{{ $card['title'] }}</p>
            <p>{{ $card['price'] }}</p>
        </article>
        @endforeach
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
        <img src="/img/dc-logo-bg.png" alt="DC Logo Background" class="logo-bg">
    </section>
    <div class="footer-socials">
        <button>SIGN-UP NOW!</button>
        <ul class="social-list">
            <li><h3><strong>FOLLOW US</strong></h3></li>
            <li><img src="/img/footer-facebook.png" alt="Facebook"></li>
            <li><img src="/img/footer-twitter.png" alt="Twitter"></li>
            <li><img src="/img/footer-pinterest.png" alt="Pinterest"></li>
            <li><img src='/img/footer-youtube.png' alt="YouTube"></li>
            <li><img src="/img/footer-periscope.png" alt="Periscope"></li>
        </ul>
    </div>
</footer>
@endsection

