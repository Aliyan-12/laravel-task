<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="d-flex">
        <a class="btn btn-outline-dark me-2" href="{{route('user.login')}}">Login</a>
        <a class="btn btn-outline-secondary me-2" href="{{route('user.register')}}">Register</a>
      </div>
    </div>
</nav>