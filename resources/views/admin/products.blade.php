@extends('/admin/layouts.app')
@section('title-block') Admin-Panel - Products @endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="flash-message my-4">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(Session::has('alert-' . $msg))
              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
              @endif
            @endforeach
          </div>
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
                                @foreach ($products as $product)
                                <tr>
                                    <td scope="row">{{ $product->id }}</td>   
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->content }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->photo }}</td>
                                    
                                    <td>
                                        <form method="POST" action="/admin/products/{{$product->id}}">
                                            @csrf
                                            
                                            {{ method_field('DELETE') }}
                                    
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                
                                            </div>
                                        </form>
                                        <div class="form-group">
                                            <a href="{{ route('admin/prod-upd', $product->id) }}"> <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                                             
                                         </div>  
                                    </td> 
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection