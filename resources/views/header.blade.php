<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ $active === 'home' ? 'active' : '' }}">
                        <span class="nav-text">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/mahasiswa" class="nav-link {{ $active === 'mahasiswa' ? 'active' : '' }}">
                        <span class="nav-text">Mahasiswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kategori" class="nav-link {{ $active === 'kategori' ? 'active' : '' }}">
                        <span class="nav-text">Kategori</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/postingan" class="nav-link {{ $active === 'postingan' ? 'active' : '' }}">
                        <span class="nav-text">Postingan</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>