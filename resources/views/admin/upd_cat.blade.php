@extends('/admin/layouts.app')
@section('title-block') Admin-Panel - Update Categories @endsection
@section('content')
<section class="content">
    <div class="container-fluid">
       
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Оновлення категорій
                            <small>для закладу {{ Auth::user()->name }} </small>
                        </h2>
                       
                    </div>
                    <div class="body">
                        
                        <form action="{{ route('admin/categ-upd', ['id' => $data->id]) }}" method="POST">
                            @csrf
                            
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="text" class="form-control" name="title" value="{{$data->title}}">
                                    <label class="form-label">Назва категорії</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="text" class="form-control" name="content" value="{{$data->content}}">
                                    <label class="form-label">Контент</label>
                                </div>
                            </div>

                          <div class="form-group form-float">
                                <div class="custom-file">
                                  <label class="custom-file-label">Виберіть фото</label>
                                  <input name="image" type="file" class="custom-file-input">
                                  </div>
                            </div>
                            <br>
                            
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Оновити</button>
                            <a href="/admin/categories"><button type="button" class="btn btn-warning m-t-15 waves-effect">Відмінити</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection