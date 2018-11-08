@extends('layouts.app')

@section('content')
    <div class="card-columns">
        <div class="card bg-light text-center">
        <img class="card-img-top" src="{{ asset('img/products/1.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-info">Заголовок</h5>
                <p class="card-text">Описание услуги...Описание услуги...Описание услуги...Описание услуги...Описание услуги...Описание услуги...Описание услуги...Описание услуги...Описание услуги...Описание услуги...</p>
                <a href="#" class="btn btn-success">Подробнее</a>
            </div>
        </div>
        <div class="card bg-light text-center">
            <img class="card-img-top" src="{{ asset('img/products/2.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-info">Заголовок</h5>
                <p class="card-text">Описание услуги...</p>
                <a href="#" class="btn btn-success">Подробнее</a>
            </div>
        </div>
        <div class="card bg-light text-center">
            <img class="card-img-top" src="{{ asset('img/products/3.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-info">Заголовок</h5>
                <p class="card-text">Описание услуги...</p>
                <a href="#" class="btn btn-success">Подробнее</a>
            </div>
        </div>
        <div class="card bg-light text-center">
            <img class="card-img-top" src="{{ asset('img/products/4.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-info">Заголовок</h5>
                <p class="card-text">Описание услуги...</p>
                <a href="#" class="btn btn-success">Подробнее</a>
            </div>
        </div>
        <div class="card bg-light text-center">
            <img class="card-img-top" src="{{ asset('img/products/5.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-info">Заголовок</h5>
                <p class="card-text">Описание услуги...</p>
                <a href="#" class="btn btn-success">Подробнее</a>
            </div>
        </div>
    </div>
@endsection
