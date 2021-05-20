@extends('layouts.app')

@section('title-block') Food delivery - welcome @endsection

@section('welcome')
    <section>
        
          <div class="image">
            <div class="container-fluid align-items-center justify-content-center">
                <div class="row justify-content-center text-center">
                    <div class="col-md-10">
                        <h2 class="display-3 font-weight-bold text-warning pt-5 mb-2">Доставка їжі на будь-який смак
                        </h2>
                        <hr class="hr-light">
                        <h3 class="text-warning my-4">Замовляйте страви тут і швидка доставка гарантована!</h3>
                        <h3 class="text-warning my-4">Ми працюємо в межах міста Івано-Франківська</h3>
                        <a href="{{ route('index') }}"><button class="btn btn-outline-dark waves-effect">Показати
                                ресторани<i class="fa fa-food"></i></button></a>
                        <h3 class="text-warning my-4">Шукайте вигідні пропозиції та акції.<br>Насолоджуйтесь широким
                            асортиментом їжі та ресторанів!</h3>
                    </div>
                </div>
              </div>
            </div>
     </section>

@endsection
