@extends('main')

@section('content')

    <div class="card mt-3">
        <div class="card-header text-center">
            Вы действительно хотите удалить эту запись?
        </div>
        <div class="card-body">
            <form action="{{route('delete', $car->id)}}">
                <div class="form-group">
                    <label>Марка автомобиля</label>
                    <div class="form-control">{{$car->mark}}</div>
                </div>
                <div class="form-group">
                    <label>Модель автомобиля</label>
                    <div class="form-control">{{$car->model}}</div>
                </div>
                <div class="form-group">
                    <label>Цвет автомобиля</label>
                    <div class="form-control">{{$car->color}}</div>
                </div>
                <div class="form-group">
                    <label>Количество автомобилей</label>
                    <div class="form-control">{{$car->count}}</div>
                </div>
                <div class="form-group">
                    <label>Цена автомобиля</label>
                    <div class="form-control">{{$car->price}}</div>
                </div>
                <div class="text-center">
                    <button class="btn btn-sm btn-danger" type="submit">Да</button>
                    <a href="{{route('home')}}" class="btn btn-sm btn-success">Нет</a>
                </div>
            </form>
        </div>
    </div>

@endsection