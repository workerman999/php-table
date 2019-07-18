@extends('main')

@section('content')

    <div class="card-body">
        <div class="text-right my-2">
            <form method="GET" action="{{route('home')}}" class="form-inline">
                @csrf
                <input class="form-control mr-sm-2{{ $errors->has('search') ? ' is-invalid' : '' }}" type="search" name="search" placeholder="Поиск" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
                @if ($errors->has('search'))
                    <span class="invalid-feedback">
                        <strong class="float-left">{{ $errors->first('search') }}</strong>
                    </span>
                @endif
            </form>
            <a href="{{route('adding')}}"><i class="fa fa-plus-square fa-2x text-primary align-middle" aria-hidden="true" title="Добавить автомобиль"></i></a>
        </div>
        <table>
            <thead>
            <tr>
                <th class="text-center"><a href="{{route('home', ['sort' => 'mark'])}}">Марка</a></th>
                <th class="text-center"><a href="{{route('home', ['sort' => 'model'])}}">Модель</a></th>
                <th class="text-center"><a href="{{route('home', ['sort' => 'color'])}}">Цвет</a></th>
                <th class="text-center"><a href="{{route('home', ['sort' => 'count'])}}">Количество</a></th>
                <th class="text-center"><a href="{{route('home', ['sort' => 'price'])}}">Цена</a></th>
                <th class="text-center"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td class="text-center">{{$car->mark}}</td>
                    <td class="text-center">{{$car->model}}</td>
                    <td class="text-center">{{$car->color}}</td>
                    <td class="text-center">{{$car->count}}</td>
                    <td class="text-center">{{$car->price}}</td>
                    <td class="text-center">
                        <a href="{{route('post-edit', $car->id)}}"><i class="fa fa-edit text-success" title="Редактировать"></i></a>
                        <a href="{{route('post-delete', $car->id)}}"> <i class="fa fa-trash text-danger" title="Удалить"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
        <?php echo $cars->render(); ?>
    </div>

@endsection