@extends('layouts.app')

@section('title-block') Food delivery - welcome @endsection

@section('content')
    <section>
        <div class="container-fluid1">
          
            <div class="col-12">
            <img src="/images/Core-KPIs-1.png" alt="Notebook" class="image">
            <div class="content">
                <p class="font-weight-bold text-white pt-1 mb-1">Доставка їжі на будь-який смак
                </p>
                
                <p class="text-white my-1">Замовляйте страви тут і швидка доставка гарантована!</p>
                <p class="text-white my-1">Ми працюємо в межах міста Івано-Франківська</p>
                <a href="{{ route('index') }}"><button class="btn btn-outline-light waves-effect my-1">Показати
                        ресторани<i class="fa fa-food"></i></button></a>
                <p class="text-white my-1">Насолоджуйтесь широким асортиментом їжі</p>
            </div>
         
        </div>
      </div>
@endsection
