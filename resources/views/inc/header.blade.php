<header class="p-3 bg-dark text-white fixed-top ">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-around ">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="{{ asset('images/logo.jpg') }}" alt="" width="50" height="50">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-1 justify-content-center mb-md-0">
          <li><a href="{{ route('welcome') }}" class="nav-link px-4 text-white">Головна</a></li>
          <li><a href="{{ route('index') }}" class="nav-link px-4 text-white">Заклади</a></li>
          <li><a href="{{ route('contacts') }}" class="nav-link px-4 text-white">Контакти</a></li>        
        </ul>

         <div class="text-end">
          <a href="{{ route('login') }}"><button type="button" class="btn btn-success btn-outline-light me-2">Увійти</button></a>
          <a href="{{ route('register') }}"><button type="button" class="btn btn-warning">Реєстрація</button></a>
          
        </div>
      </div>
    </div>
  </header>
