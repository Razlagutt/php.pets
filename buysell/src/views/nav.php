<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">BuySell</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <form method="get" action="/search" class="d-flex" role="search">
                    <input type="search" value="search" class="form-control me-2" placeholder="Строка поиска..." aria-label="Search">
                    <button class="btn btn-outline-success me-2" type="submit">Поиск</button>
                </form>
                <a href="/signin" class="btn btn-outline-primary" type="button">Войти</a>
            </div>
        </div>
    </nav>
</header>