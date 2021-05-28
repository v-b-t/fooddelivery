@extends('layouts.app')
@section('title-block') Моє замовлення - Food delivery @endsection
@section('cart')
    <div class="container mb-4" style="margin-top: 105px;">
        <h2 class="text-center text-success">Корзина</h2>
    </div>
    <div class=" mb-4 col-10 offset-1">

        <div class="row">
            <div class="col-sm-8 col-md-12 col-lg-12 col-xs-4">
                <div class="panel panel-info panel-shadow">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th>Product</th>
                                        <th>Description</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>
                                            <h3>Name</h3>
                                        </td>
                                        <td><strong>Product 1</strong>
                                            <p>Size : 26</p>
                                        </td>
                                        <td>
                                            <div class="form-inline justify-content-center">
                                                <button type="button" class="btn btn-danger btn-number m-1">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                                <h5 class="px-2"> 1 шт. </h5>
                                                <button type="button" class="btn btn-success btn-number m-1">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <a href="#" class="btn btn-primary"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </td>
                                        <td>$54.00</td>
                                        <td>$54.00</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h3>Name2</h3>
                                        </td>
                                        <td><strong>Product 2</strong>
                                            <p>Size : 26</p>
                                        </td>
                                        <td>
                                            <div class="form-inline justify-content-center">
                                                <button type="button" class="btn btn-danger btn-number m-1">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                                {{-- <input class="form-control m-1" type="text" value="1"> --}}
                                                <h5 class="px-2"> 2 шт. </h5>
                                                <button type="button" class="btn btn-success btn-number m-1">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <a href="#" class="btn btn-primary"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </td>
                                        <td>$54.00</td>
                                        <td>$54.00</td>
                                    </tr>

                                    <tr>
                                        <td colspan="4" class="text-right">Загальна сума</td>
                                        <td>$86.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Вартість пакування</td>
                                        <td>$2.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right"><strong>До оплати</strong></td>
                                        <td>$88.00</td>
                                    </tr>
                                </tbody>

                            </table>
                            <div class="container">
                                <a href="#" class="btn btn-success pull-left m-2">Продовжити покупки</a>
                                <a href="#" class="btn btn-primary pull-right m-2">Оформити</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
