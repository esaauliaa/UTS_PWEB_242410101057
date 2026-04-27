@extends('layouts.app')

@section('content')

<div class="profile-page">

    <div class="profile-header">
        <h1 class="profile-title">My Profile</h1>
        <div class="profile-line"></div>
    </div>

    <div class="profile-banner"></div>

    <div class="profile-avatar-wrapper">
        <img src="{{ asset('images/profile-avatar.png') }}" alt="Avatar" class="profile-avatar">
    </div>

    <div class="profile-form-wrapper">
        <div class="profile-form-grid">

            <div class="profile-field">
                <label>Username</label>
                <input type="text" value="{{ $profile['username'] }}" readonly>
            </div>

            <div class="profile-field">
                <label>Phone</label>
                <input type="text" value="{{ $profile['phone'] }}" readonly>
            </div>

            <div class="profile-field">
                <label>Name</label>
                <input type="text" value="{{ $profile['name'] }}" readonly>
            </div>

            <div class="profile-field">
                <label>Password</label>
                <div class="profile-password-box">
                    <input type="password" value="{{ $profile['password'] }}" id="profilePassword" readonly>
                    <button type="button" class="toggle-password" onclick="togglePassword()">
                        👁
                    </button>
                </div>
            </div>

            <div class="profile-field">
                <label>Email</label>
                <input type="text" value="{{ $profile['email'] }}" readonly>
            </div>

            <div class="profile-field">
                <label>Role</label>
                <input type="text" value="{{ $profile['role'] }}" readonly>
            </div>

        </div>

        <p class="profile-thanks">
            Thank you for being part of bloom bouquet, have a nice day ❤
        </p>
    </div>

</div>

<script>
function togglePassword() {
    const input = document.getElementById('profilePassword');
    input.type = input.type === 'password' ? 'text' : 'password';
}
</script>

@endsection
