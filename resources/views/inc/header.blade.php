  <header>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
              <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.jpg') }}" alt="" width="50"
                      height="50"></a>

              <div class="collapse navbar-collapse" id="navb">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('welcome') }}">Головна</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('index') }}">Заклади</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('contacts') }}">Контакти</a>
                      </li>
                  </ul>
                  <div class="text-end">
                      <a href="{{ route('login') }}" target="_blank"><button type="button"
                              class="btn btn-success btn-outline-light me-2">Увійти</button></a>
                      <a href="{{ route('register') }}" target="_blank"><button type="button"
                              class="btn btn-warning">Реєстрація</button></a>
                  </div>
              </div>
          </div>
      </nav>

  </header>
