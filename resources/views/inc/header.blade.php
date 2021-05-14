<header class="p-3 bg-dark text-white fixed-top ">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-around ">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="{{ asset('logo.png') }}"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('welcome') }}" class="nav-link px-2 text-white">Головна</a></li>
          <li><a href="{{ route('index') }}" class="nav-link px-2 text-white">Заклади</a></li>
          <li><a href="{{ route('contacts') }}" class="nav-link px-2 text-white">Контакти</a></li>        
        </ul>

         <div class="text-end">
          <a href="{{ route('login') }}"><button type="button" class="btn btn-success btn-outline-light me-2">Увійти</button></a>
          <a href="{{ route('register') }}"><button type="button" class="btn btn-warning">Реєстрація</button></a>
          
        </div>
      </div>
    </div>
  </header>
