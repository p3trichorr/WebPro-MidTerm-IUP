@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Order') }}</div>
                <div class="form-inline">
                        <a href="{{route('pizza.index')}}"><button class="btn btn-primary btn-sm" style="float: right">View Pizza</button></a>
                        <a href="{{route('pizza.create')}}"><button class="btn btn-success btn-sm" style="float: right">Add new Pizza</button></a>
                    </div>
                <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">User</th>
                            <th scope="col">Phone/Email</th>
                            <th scope="col">Date/Time</th>
                            <th scope="col">Pizza Name</th>
                            <th scope="col">Small</th>
                            <th scope="col">Medium</th>
                            <th scope="col">Large</th>
                            <th scope="col">Total (Rp)</th>
                            <th scope="col">Message</th>
                            <th scope="col">Status</th>
                            <th scope="col">Accept</th>
                            <th scope="col">Reject</th>
                            <th scope="col">Completed</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order )
                        <tr>
                            <td>{{$order->user->name}}</td>
                            <td>{{$order->user->email}}<br>{{$order->phone}}</td>
                            <td>{{$order->date}}\{{$order->time}}</td>
                            <td>{{$order->pizza->name}}</td>
                            <td>{{$order->small_pizza}}</td>
                            <td>{{$order->medium_pizza}}</td>
                            <td>{{$order->large_pizza}}</td>
                            <td>{{ ($order->pizza->small_pizza_price * $order->small_pizza)+
                                ($order->pizza->medium_pizza_price * $order->medium_pizza)+
                                ($order->pizza->large_pizza_price * $order->large_pizza)
                            }}</td>
                            <td>{{$order->body}}</td>
                            <td>{{$order->status}}</td>
                        <form action="{{route('order.status', $order->id)}}" method="post">@csrf
                            <td>
                                <input name="status" type="submit" value="Accepted" class="btn btn-primary btn-sm">
                            </td>
                            <td>
                                <input name="status" type="submit" value="Rejected" class="btn btn-danger btn-sm">
                            </td>
                            <td>
                                <input name="status" type="submit" value="Completed" class="btn btn-success btn-sm">
                            </td>
                        </form>
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
