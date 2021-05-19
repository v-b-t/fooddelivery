@extends('layouts.app')

@section('title-block') Food delivery @endsection

@section('content')
    <div class="container-fluid" style="margin-top:45px; ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="block-header">
                    <h3><span class="badge badge-success">Усі заклади Івано-Франківська</span></h3>
                </div>
            </div>
        </div>
        <div class="row col-12 justify-content-center">
            <div class="card p-2 m-2" style="width:220px">
                <a href="#" class="btn btn-warning stretched-link m-2">Десятка Бістро</a>
                <img class="card-img-top" src="/images/desiatka.png" alt="Restourant image" width="60px" height="140px">
                <div class="card-body">
                    <p class="card-text">м.Івано-Франківськ вул. Шашкевича 4</p>
                    <p class="card-text">12:00 - 22:00</p>
                </div>
            </div>
            <div class="card p-2 m-2" style="width:220px">
                <a href="#" class="btn btn-warning stretched-link m-1">Фамілія</a>
                <img class="card-img-top" src="/images/familia.jpg" alt="Restourant image" width="60px" height="140px">
                <div class="card-body">
                    <p class="card-text">м.Івано-Франківськ вул. Незалежності</p>
                    <p class="card-text">11:00 - 21:00</p>
                </div>
            </div>
            <div class="card p-2 m-2" style="width:220px">
                <a href="#" class="btn btn-warning stretched-link m-1">Десятка Бістро</a>
                <img class="card-img-top" src="/images/desiatka.png" alt="Restourant image" width="60px" height="140px">
                <div class="card-body">
                    <p class="card-text">м.Івано-Франківськ вул. Шашкевича 4</p>
                    <p class="card-text">12:00 - 22:00</p>
                </div>
            </div>
            <div class="card p-2 m-2" style="width:220px">
                <a href="#" class="btn btn-warning stretched-link m-1">Десятка Бістро</a>
                <img class="card-img-top" src="/images/desiatka.png" alt="Restourant image" width="60px" height="140px">
                <div class="card-body">
                    <p class="card-text">м.Івано-Франківськ вул. Шашкевича 4</p>
                    <p class="card-text">12:00 - 22:00</p>
                </div>
            </div>
            <div class="card p-2 m-2" style="width:220px">
                <a href="#" class="btn btn-warning stretched-link m-1">Десятка Бістро</a>
                <img class="card-img-top" src="/images/desiatka.png" alt="Restourant image">
                <div class="card-body">
                    <p class="card-text">м.Івано-Франківськ вул. Шашкевича 4</p>
                    <p class="card-text">12:00 - 22:00</p>
                </div>
            </div>
        </div>
    </div>
@endsection
