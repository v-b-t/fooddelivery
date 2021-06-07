@extends('layouts.app')
@section('title-block') Десятка - Івано-Франківськ @endsection
@section('content')

<div class="container-fluid">
    <div class="col-12">
        <div class="row">
            <div class="col-4">
                <div class="container-fluid" style="margin-top: 45px;">
                    <div class="row justify-content-center">
                        <div class="card border-danger mb-3" style="max-width: 18rem; position:fixed; left;">
                            <div class="card-header">Ресторан</div>
                            <div class="card-body text-danger">
                                <img class="card-img-top" src="/images/desiatka.png" alt="Restourant image" width="25px;"
                                    height="110px;">
                                <h5 class="card-title">Десятка</h5>
                                <p class="card-text">вул. Шашкевича 41</p>
                                <p class="card-text">12:00 - 22:00</p>
                            </div>
                        </div>
            
                    </div>
            
                </div>
            </div>
            <div class="col-8">
                <div class="container-fluid mb-4" style="margin-top: 45px;">
                    <div class="row justify-content-center">
                        <div class="block-header">
                            <h3><span class="badge badge-warning shadow rounded">Популярні страви</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center"  style="margin-bottom:60px; ">
                    @foreach ($products as $ell)
                    <div class="card p-3 m-1" style="width:240px; ">      
                        <img class="card-img-top" src="/images/products/piza_cardinale.jpg" alt="Meal image" width="30px;" height="140px">
                        <div class="card-body">
                            <h4 class="card-text">{{ $ell->title }}</h4>
                            <p class="card-text">{{ $ell->content }}</p>
                            <p class="card-text">{{ $ell->price }} грн.</p>
                        </div>
                        <a href="#" class="btn btn-info m-2">В кошик</a>
                    </div>
                    @endforeach 
                    
                </div>
            </div>
        </div>
    </div>
</div>

    



@endsection
