@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="" class="list-group-item list-group-item-action">View</a>
                        <a href="" class="list-group-item list-group-item-action">create</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name of Pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="Input pizza name here">
                    </div>
                    <div class="form-group">
                        <label for="description">Description of Pizza</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-inline">
                        <label>Pizza price (Rp)</label>
                        <input type="number" class="form-control" placeholder="Small Pizza">
                        <input type="number" class="form-control" placeholder="Medium Pizza">
                        <input type="number" class="form-control" placeholder="Large Pizza">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control">
                            <option value=""></option>
                            <option value="vegetarian">Vegetarian</option>
                            <option value="nocru">No-Crust</option>
                            <option value="vegenocru">Vegetarian + No-Crust</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
