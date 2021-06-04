@extends('/admin/layouts.app')
@section('title-block') Admin-Panel - Products @endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <a href="/admin/add_prod" ><button type="button" class="btn btn-success m-t-15  waves-effect">Додати продукт</button></a>
        <div class="row clearfix ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="card">
                    <div class="header">
                        <h3>
                            Всі продукти ресторану {{ Auth::user()->name }}
                           
                        </h3>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Назва продукту</th>
                                    <th>Контент</th>
                                    <th>Ціна</th>
                                    <th>Фото</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>
                                        <a href="#" class="btn btn-primary" ><i class="fa fa-edit"></i></a>       
                                        <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>  
                                    </td> 
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection