@extends('/admin/layouts.app')
@section('title-block') Admin-Panel - Add Product @endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Додавання продукту
                                <small>для закладу {{ Auth::user()->name }} </small>
                            </h2>

                        </div>
                        {{--  --}}
                        <div class="body">
                            <form method="POST" action="{{ route('admin/prod-add') }}">
                                @csrf
                                
                            <select name="categoryId">
                            <option value="">Оберіть категорію</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                            @endforeach
                            </select>
                            
                            
                                <input type="hidden" name="userId" value="{{Auth::user()->id}}"/>

                                {{--  --}}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="text" class="form-control" name="title">
                                        <label class="form-label">Назва продукту</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="text" class="form-control" name="content">
                                        <label class="form-label">Контент</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="text" class="form-control" name="price">
                                        <label class="form-label">Ціна</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="custom-file">
                                        <label class="custom-file-label">Виберіть фото</label>
                                        <input name="photo" type="file" class="custom-file-input">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-info m-t-15 waves-effect">Додати</button>
                                <a href="/admin/products"><button type="button" class="btn btn-warning m-t-15 waves-effect">Відмінити</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
