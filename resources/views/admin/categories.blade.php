@extends('/admin/layouts.app')
@section('title-block') Admin-Panel - Categories @endsection
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
        <a href="/admin/add_cat" ><button type="button" class="btn btn-success m-t-15  waves-effect">Додати категорію</button></a>
        <div class="row clearfix ">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="card">
                    <div class="header">
                        <h3>
                            Всі категорії
                        </h3>
                    </div>
                   
                    <div class="body table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Назва категорії</th>
                                    <th>Контент</th>
                                    <th>Фото</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($categories as $category)
                                <tr>
                                    <td scope="row">{{ $category->id }}</td>   
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->content }}</td>
                                    <td>@mdo</td>
                                    <td>
                                                          
                                        <form method="POST" action="/admin/categories/{{$category->id}}">
                                            @csrf
                                            
                                            {{ method_field('DELETE') }}
                                    
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                
                                            </div>
                                        </form>
                                       

                                            <div class="form-group">
                                               <a href="{{ route('admin/categ-upd', $category->id) }}"> <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                                                
                                            </div>
            
                                    </td> 
                                </tr>
                                @endforeach           
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
