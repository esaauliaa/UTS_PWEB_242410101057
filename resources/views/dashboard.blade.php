@extends('layouts.app')

@section('content')

<div class="dashboard-container">
    <div class="dashboard-left">
        <h1 class="dashboard-title">
            Welcome Back, <span class="username-text">{{ $username }}</span>
        </h1>

        <div class="section-line"></div>

        <p class="dashboard-subtitle">
            The best place to find a variety of beautiful flower bouquets
            with elegant designs and high quality that are perfect for your
            special day!
        </p>

        <div class="dashboard-cards">
            <div class="dashboard-card">
                <h3>What We Sell</h3>
                <p>
                    We provide a variety of beautiful flower bouquets
                    for various needs, such as:
                </p>
                <ul>
                    <li>Graduation Bouquets</li>
                    <li>Birthday Bouquets</li>
                    <li>Anniversary Bouquets</li>
                    <li>and many more!</li>
                </ul>
            </div>

            <div class="dashboard-card">
                <h3>How to Order</h3>
                <p>
                    You can come directly to our flower shop at
                    Jl. Sumatra IV No. 85, Sumbersari, Jember,
                    and book via WhatsApp or Instagram below.
                </p>
            </div>

            <div class="dashboard-card">
                <h3>Why Bloom Bouquet</h3>
                <p>
                    We always prioritize the quality of fresh flowers,
                    elegant bouquet designs, and the best service for
                    your satisfaction. Every bouquet is made with sincere love.
                </p>
            </div>
        </div>
    </div>

    <div class="dashboard-right">
        <img src="{{ asset('images/tulip.png') }}" alt="Tulip Bouquet">
    </div>
</div>

@endsection
