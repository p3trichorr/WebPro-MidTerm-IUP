@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    <form action="{{route('frontpage')}}" method="get">
                        <a class="list-group-item" href="/"><h5>Reset Category</h5></a>
                        <input type="submit" value="Normal" name="category" class="list-group-item list-group-item-action">
                        <input type="submit" value="Vegetarian" name="category" class="list-group-item list-group-item-action">
                        <input type="submit" value="No-Crust" name="category" class="list-group-item list-group-item-action">
                    </form>
                    <h1 class="text-center">{{count($pizzas)}} pizza</h1>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>

                <div class="card-body">
                    <div class="row">
                        @forelse ( $pizzas as $pizza)
                        <div class="col-md-4 mt-2 text-center" style="border: 1px solid #ccc;">
                            <img src="{{Storage::url($pizza->image)}}" class="img-thumbnail" style="width: 100%;">
                            <p>{{$pizza->name}}</p>
                            <p>{{$pizza->description}}</p>
                            <a href="{{route('pizza.show', $pizza->id)}}">
                                <button class="btn btn-danger mb-1">Order now</button>
                            </a>
                        </div>
                        @empty
                        <p>No Pizza available atm</p>

                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    a.list-group-item{
        font-size: 18px;
    }
    a.list-group-item:hover{
        background-color: red;
        color: #fff;
    }
    .card-header{
        background-color: red;
        color: #fff;
        font-size: 20px;
    }
</style>
@endsection
