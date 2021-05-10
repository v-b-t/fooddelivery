@extends('layouts.app')
@section('title-block') Contact us @endsection
@section('contact')
<div class="container">
    <div class="row justify-content-center">
    <h3 class="text-center text-primary mt-3 mb-3">Contact us</h3>
   
</div>
</div>
<div class="container mb-3">
    <div class="row justify-content-center">
    <form action="{{ route('contacts-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введіть ім'я</label>
            <input type="text" name="name" placeholder="Введіть ім'я" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Введіть email</label>
            <input type="email" name="email" placeholder="Введіть email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема повідомлення</label>
            <input type="text" name="subject" placeholder="Введіть тему" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Повідомлення</label>
            <textarea name="message" id="message" cols="90" rows="6" class="form-control" placeholder="Введіть повідомлення"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Надіслати</button>
    </form>
    </div>
</div>
<!--коментарі вивід-->
{{-- <div class="container mt-3">
    <h3 class="text-center text-primary mt-3 mb-3">Коментарі</h3>
    @foreach ($data as $elem)
        <div class="alert alert-info">
            <h4>{{$elem->subject}}</h4>
        </div>
    @endforeach
</div> --}}

@endsection