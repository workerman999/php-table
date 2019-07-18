@extends('main')

@section('content')

    <div class="card mt-3">
        <div class="card-header text-center">
            Добавить автомобиль
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('save')}}">
                @csrf
                <div class="form-group">
                    <label>Марка автомобиля</label>
                    <input id="mark" type="text" class="form-control{{ $errors->has('mark') ? ' is-invalid' : '' }}" name="mark" value="{{ old('mark') }}" required autofocus maxlength="50">
                    @if ($errors->has('mark'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('mark') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Модель автомобиля</label>
                    <input id="model" type="text" class="form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model" value="{{ old('model') }}" required autofocus maxlength="50">
                    @if ($errors->has('model'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('model') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Цвет автомобиля</label>
                    <input id="color" type="text" class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" value="{{ old('color') }}" required autofocus maxlength="50">
                    @if ($errors->has('color'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('color') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Количество автомобилей</label>
                    <input id="count" type="text" class="form-control{{ $errors->has('count') ? ' is-invalid' : '' }}" name="count" value="{{ old('count') }}" required autofocus maxlength="5">
                    @if ($errors->has('count'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('count') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Цена автомобиля</label>
                    <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required autofocus maxlength="15">
                    @if ($errors->has('price'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="text-center">
                    <button class="btn btn-sm btn-danger">Сохранить</button>
                    <a href="{{route('home')}}" class="btn btn-sm btn-success">Отмена</a>
                </div>
            </form>
        </div>
    </div>

@endsection