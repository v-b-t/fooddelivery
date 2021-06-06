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
                        <div class="body">
                            <form actions="{{ route('prod-add') }}" method="POST">
                                @csrf
                                {{-- <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="text" class="form-control">
                                <label class="form-label">Назва категорії</label>
                            </div>
                        </div> --}}

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
                                        <input name="image" type="file" class="custom-file-input">
                                    </div>
                                </div>

                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Додати</button>
                                <a href="/admin/products"><button type="button" class="btn btn-warning m-t-15 waves-effect">Відмінити</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
