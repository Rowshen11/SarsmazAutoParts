<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('products.index') }}">
            <i class="bi bi-gear-fill me-2"></i>SarsmazAutoParts
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}" 
                       href="{{ route('products.index') }}">Katalog</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">Eltip berme hyzmaty</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pages.about')?'active':'' }}" href="{{ route('pages.about') }}">Biz barada</a>
                </li>
            </ul>

            <div class="d-flex align-items-center">
                <a href="#" class="btn btn-outline-light position-relative me-3">
                    <i class="bi bi-cart3"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        0
                    </span>
                </a>
                <a href="#" class="btn btn-primary btn-sm">Giriş</a>
            </div>
        </div>
    </div>
</nav>