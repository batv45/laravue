<header class="navbar navbar-expand-md navbar-dark d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
                <img src="{{asset('static/logo-white.svg')}}" width="110" height="32"
                     alt="Quattro" class="navbar-brand-image">
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item">
                    <a href="{{route('login')}}#" class="nav-link d-flex lh-1 text-reset p-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-2x icon-tabler icon-tabler-login"
                             width="32" height="32" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                            <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                        </svg>
                    <div class="d-none d-xl-block ps-1">
                        <div>Giriş</div>
                    </div>
                </a>
            </div>
            <span class="nav-item mx-2 text-muted">—</span>
            <div class="nav-item">
                    <a href="{{route('register')}}#" class="nav-link d-flex lh-1 text-reset p-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-2x icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            <path d="M16 11h6m-3 -3v6"></path>
                        </svg>
                    <div class="d-none d-xl-block ps-1">
                        <div>Kayıt</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('welcome')}}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
   <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
   <rect x="10" y="12" width="4" height="4"></rect>
</svg>                            </span>
                            <span class="nav-link-title">{{__('Home')}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
