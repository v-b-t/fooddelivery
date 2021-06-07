  <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container-fluid">
              <div class="row col-10 offset-1 justify-content-center ">

                  <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('images/logo.jpg') }}"
                          alt="" width="50" height="50" style="border-radius: 25px"></a>
                  <div class="collapse navbar-collapse" id="navb">
                      <ul class="navbar-nav mr-auto">
                          <li class="nav-item">
                              <a class="nav-link text-warning" href="{{ route('index') }}">Заклади</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link text-warning" href="{{ route('contacts') }}">Контакти</a>
                          </li>
                      </ul>
                      <div class="text-end">
                        <a href="{{ route('cart') }}"><i class="fa fa-shopping-cart text-white" style="font-size:30px"></i></a>
                      </div>
                  </div>

              </div>
          </div>
      </nav>
  </header>
