@extends('layouts.app')
@section('title-block') Оформлення замовлення - Food delivery @endsection
@section('content')
<div class="container">

    <div class="container mb-4" style="margin-top: 105px;">
        <h2 class="text-center text-success">Оформлення</h2>
    </div>
    <div class="container mb-4">
        <div class="row">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Ваш кошик</span>
                    <span class="badge bg-primary rounded-pill text-white">0</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">12 грн.</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">8 грн.</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">5 грн.</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Вартість пакування</h6>

                        </div>
                        <span class="text-success">10 грн.</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Загальна сума</span>
                        <strong>100 грн.</strong>
                    </li>
                </ul>

            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Мої дані</h4>
                <form class="form-group">
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="firstName" class="form-label">Ім'я</label>
                            <input type="text" class="form-control" id="firstName" value="">
                            
                        </div>

                        <div class="col-sm-4">
                            <label for="middleName" class="form-label">По батькові</label>
                            <input type="text" class="form-control" id="middleName" value="">
                            
                        </div>

                        <div class="col-sm-4">
                          <label for="lastName" class="form-label">Прізвище</label>
                          <input type="text" class="form-control" id="lastName" value="" required>
                          
                      </div>

                      <div class="col-12">
                        <label for="email" class="form-label">Моб. телефон <span class="text-muted"></span></label>
                        <input type="text" class="form-control" id="text" placeholder="+380661234567" required>
                        
                    </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Адреса</label>
                            <input type="text" class="form-control" id="address" placeholder="вул. Липова 9" required="">
                            
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Квартира <span
                                    class="text-muted">(Не обов'язково)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Номер квартири">
                        </div>
                        <hr class="my-4">

                        <div class="col-12">
                        <div class="form-floating">
                          <label for="floatingTextarea2">Коментар</label>
                          <textarea class="form-control" placeholder="Можливо, у Вас є додаткове повідомлення" id="floatingTextarea2" style="height: 80px"></textarea>
                        </div>
                      </div>

                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <button class="btn btn-secondary btn-lg my-3" type="submit">Назад</button>
                                    <button class="w-50 btn btn-primary btn-lg my-3 ml-2" type="submit">Замовити</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>      
</div>
@endsection
