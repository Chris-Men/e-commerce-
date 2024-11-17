<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Vue ecommerce</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 @if (request()->routeIs('admin.index')) text-dark @endif"
                        aria-current="page" href="{{ route('admin.index') }}">
                        <i class="fas fa-dashboard"></i>
                        Panel
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 @if (request()->routeIs('admin.categories.index')) text-dark @endif"
                        aria-current="page" href="{{ route('admin.categories.index') }}">
                        <i class="fa-solid fa-layer-group"></i>
                        Categorias
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 @if (request()->routeIs('admin.brands.index')) text-dark @endif"
                        aria-current="page" href="{{ route('admin.brands.index') }}">
                        <i class="fa-solid fa-copyright"></i>
                        Marcas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 @if (request()->routeIs('admin.colors.index')) text-dark @endif"
                        aria-current="page" href="{{ route('admin.colors.index') }}">
                        <i class="fa-solid fa-palette"></i>
                        Colores
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 @if (request()->routeIs('admin.sizes.index')) text-dark @endif"
                        aria-current="page" href="{{ route('admin.sizes.index') }}">
                        <i class="fa-solid fa-expand"></i>
                        Tallas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 @if (request()->routeIs('admin.products.index')) text-dark @endif"
                        aria-current="page" href="{{ route('admin.products.index') }}">
                        <i class="fa-solid fa-tag"></i>
                        Productos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 @if (request()->routeIs('admin.coupons.index')) text-dark @endif"
                        aria-current="page" href="{{ route('admin.coupons.index') }}">
                        <i class="fa-solid fa-ticket"></i>
                        Cupones
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 @if (request()->routeIs('admin.orders.index')) text-dark @endif"
                        aria-current="page" href="{{ route('admin.orders.index') }}">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Ordenes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 @if (request()->routeIs('admin.reviews.index')) text-dark @endif"
                        aria-current="page" href="{{ route('admin.reviews.index') }}">
                        <i class="fa-solid fa-star"></i>
                        Reseñas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 @if (request()->routeIs('admin.users.index')) text-dark @endif"
                        aria-current="page" href="{{ route('admin.users.index') }}">
                        <i class="fa-solid fa-users"></i>
                        Usuarios
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link d-flex align-items-center gap-2">
                        <i class="fas fa-user"></i>
                        {{ auth()->guard('admin')->user()->name }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" onclick="document.getElementById('adminLogoutForm').submit()"
                        class="nav-link d-flex align-items-center gap-2">
                        <i class="fas fa-sign-out"></i>
                        Sign out
                    </a>
                    <form id="adminLogoutForm" action="{{ route('admin.logout') }}" method="post">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
