@extends('layouts.app')
@section('title-block') Food delivery @endsection
@section('content')
<div class="container-fluid mt-4 mb-3">
    <div class="col-12">
        <div class="row">
            <div class="col-4">
                <div class="container" style="margin-top: 45px;">
                    <div class="row justify-content-center">
                        <h3><span class="badge badge-info shadow rounded">Вибір закладу</span></h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="card  bg-light m-2">
                        <div class="card-body p-1 m-1   bg-light text-white text-center" style="width:105px">
                            <img class="card-img-top" src="/images/house.ico" alt="Restourant image">
                            <a href="#" class="btn btn-success stretched-link m-1 ">Усі</a>
                        </div>
                    </div>
                    @foreach ($cat as $el)
                    <div class="card bg-light m-2">
                        <div class="card-body p-1 m-1 bg-light text-white text-center" style="width:105px">
                            <img class="card-img-top" src="/images/house.ico" alt="Restourant image">
                            <a href="#" class="btn btn-success stretched-link m-1">{{ $el->title }}</a>
                        </div>
                    </div>  
                    @endforeach                     
                </div>
            </div>
            <div class="col-8">
                <div class="container" style="margin-top: 45px;">
                    <div class="row justify-content-center">
                        <div class="block-header">
                            <h3><span class="badge badge-primary shadow rounded">Усі заклади Івано-Франківська</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="card p-1 m-1" style="width:220px">
                        <a href="#" class="btn btn-warning stretched-link m-2">Десятка Бістро</a>
                        <img class="card-img-top" src="/images/desiatka.png" alt="Restourant image" width="50px;" height="140px;">
                        <div class="card-body">
                            <p class="card-text">вул. Шашкевича 4</p>
                            <p class="card-text">12:00 - 22:00</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
        
  
@endsection
