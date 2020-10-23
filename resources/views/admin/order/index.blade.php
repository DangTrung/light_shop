@extends('admin.master')
@section('title', 'ORDER')
@section('content')
<div class="col-12">
    <div class="col-12 p-0">
        <ul class="list-group">
            <li class="list-group-item bg-whitesmoke">
                <h5 class="m-0 font-weight-bold text-center text-uppercase">
                    List Order
                </h5>
            </li>
            <li class="list-group-item">
                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-uppercase text-center" scope="col">#</th>
                            <th class="text-uppercase text-center" scope="col">User</th>
                            <th class="text-uppercase text-center" scope="col">Address</th>
                            <th class="text-uppercase text-center" scope="col">total</th>
                            <th class="text-uppercase text-center" scope="col">description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $value)
                        <tr>
                            <th>{{$value->order_id}}</th>
                            <td>{{$value->name}}</td>
                            <td>{{$value->order_address}}</td>
                            <td>
                                <span class="text-success font-weight-bold">$&nbsp</span>{{$value->order_total}}
                            </td>
                            <td>{{$value->order_description}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </li>
        </ul>
    </div>
</div>
@endsection