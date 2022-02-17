<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">Asep</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{ ($title === 'home') ? 'active' : ''}}" href="home">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === 'about') ? 'active' : ''}}" href="about">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === 'gallery') ? 'active' : ''}}" href="gallery">Gallery</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === 'contacts') ? 'active' : ''}}" href="contacts">Contact me muah :)</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route ('login')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('register')}}">Register</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

