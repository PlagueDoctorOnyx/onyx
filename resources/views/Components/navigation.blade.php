<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/3cbb86724c.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                <a class="navbar-brand" href="#">Onyx</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item {{ request()->is('/') ? 'bg-dark-subtle' : '' }}">
                                <a class="nav-link {{ request()->routeIs('/') ? 'active text-primary-emphasis' : '' }}" aria-current="page" href="{{ URL::to('/') }}">Home</a>
                            </li>
                            <li class="nav-item {{ request()->is('forum') ? 'active bg-dark-subtle' : '' }}">
                                <a class="nav-link {{ request()->is('forum') ? 'active text-primary-emphasis' : '' }}" aria-current="page" href="{{ URL::to('/forum') }}">Forum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="">Tickets</a>
                            </li>
                        </ul>
                        <div class="d-flex>">
                            <a href="{{ URL::to('/') }}">Profile</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container">