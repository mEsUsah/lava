<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 100vh">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="svg/haxor-logo-only-white.svg" alt="" class="logo_sidebar_haxor">
        <span class="fs-4">Lava</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/" class="nav-link {{ $handle == "home" ? "active" : "text-white" }}">
                <i class="bi bi-house-door"></i>
                Home
            </a>
        </li>
        <li>
            <a href="/users" class="nav-link {{ $handle == "users" ? "active" : "text-white" }}">
                <i class="bi bi-people"></i>
                Users
            </a>
        </li>
        <li>
            <a href="/accounts" class="nav-link {{ $handle == "accounts" ? "active" : "text-white" }}">
                <i class="bi bi-journals"></i>
                Accounts
            </a>
        </li>
        <li>
            <a href="/transactions" class="nav-link {{ $handle == "transactions" ? "active" : "text-white" }}">
                <i class="bi bi-arrow-left-right"></i>
                Transactions
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
            <strong>&nbsp;{{ Auth::user()->name }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>

{{-- <a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a> --}}