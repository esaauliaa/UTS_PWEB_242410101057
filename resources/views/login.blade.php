@extends('layouts.app')

@section('content')

<div class="login-page">
    <div class="login-left">
        <div class="login-content">
            <h1 class="login-title">LOGIN</h1>

            <p class="login-subtitle">
                Enter to discover the beauty of curated flower bouquets
            </p>

            <form action="/dashboard" method="POST" class="login-form">
                @csrf

                <div class="form-group">
                    <label>Username</label>
                    <div class="input-wrapper">
                        <span class="input-icon">👤</span>
                        <input type="text" name="username" placeholder="Enter Username" value="{{ old('username') }}">
                    </div>

                    @error('username')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Name</label>
                    <div class="input-wrapper">
                        <span class="input-icon">🌸</span>
                        <input type="text" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                    </div>

                    @error('name')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="input-wrapper">
                        <span class="input-icon">🔒</span>
                        <input type="password" name="password" placeholder="Enter Password">
                    </div>

                    @error('password')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </div>

    <div class="login-right">
        <img src="{{ asset('images/login-flower.png') }}" alt="Flower Login">
    </div>
</div>

@endsection
