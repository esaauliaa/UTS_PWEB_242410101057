<nav class="navbar">
    <div class="logo">Bloom Bouquet</div>

    <div class="nav-links">
        <a href="/dashboard/{{ $username }}"
           class="{{ request()->is('dashboard*') ? 'active' : '' }}">
            Dashboard
        </a>

        <a href="/pengelolaan/{{ $username }}"
           class="{{ request()->is('pengelolaan*') ? 'active' : '' }}">
            Pengelolaan
        </a>

        <a href="/profile/{{ $username }}"
           class="{{ request()->is('profile*') ? 'active' : '' }}">
            Profil
        </a>
    </div>
</nav>
