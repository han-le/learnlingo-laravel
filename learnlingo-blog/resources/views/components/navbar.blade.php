<nav class="header-nav navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <button class="header-toggle-btn navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-main collapse navbar-collapse" id="navbarSupportedContent">
            <!--1.1.Logo Image-->
            <a class="header__icon navbar-brand" href="/">
                <img src="/images/logo_2.png" style="width: 45px" alt="logo">
            </a>
            <!--1.2.Menu-->
            <ul class="header__menu navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Idioms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Phrases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Short reads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/quick-links">Quick links</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/donate">DONATE</a>
                </li>
            </ul>

        </div>

        <!-- Search-->
        <div>
            <form class="header__search d-flex"
                  method="GET"
                  action="{{ route('search-results') }}"
            >
                <input class="form-control"
                       placeholder="SEARCH..."
                       aria-label="Search"
                       value=""
                       type="search"
                       name="keyword"
                >
                <button class="search-icon" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</nav>
