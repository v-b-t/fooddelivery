@extends('layouts.app')

@section('title-block') Food delivery - welcome @endsection

@section('welcome')
    <section>
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="image">
                    <div class="alert alert-success welcome text-center">
                        <strong>Замовляйте страви тут і швидка доставка гарантована!</strong>
                        <a href="{{ route('index') }}" class="alert-link text-warning">Шукайте</a> <strong>вигідні
                            пропозиції та акції.
                            Насолоджуйтесь широким асортиментом їжі та ресторанів! </strong>
                    </div>
                </div>
            </div>
    </section>
@endsection
