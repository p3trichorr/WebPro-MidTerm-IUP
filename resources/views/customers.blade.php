@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Customers</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Customers') }}</div>
                    <div class="form-inline">
                        <a href="{{route('pizza.index')}}"><button class="btn btn-primary btn-sm" style="float: right">View Pizza</button></a>
                        <a href="{{route('pizza.create')}}"><button class="btn btn-success btn-sm" style="float: right">Add new Pizza</button></a>
                    </div>
                <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Since</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer )
                        <tr>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{\Carbon\Carbon::parse($customer->created_at)->format('M d Y')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 