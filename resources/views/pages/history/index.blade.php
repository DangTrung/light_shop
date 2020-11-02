@extends('master')
@section('title', 'HISTORY')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-column align-items-center">
            <div class="col-6 text-center">
                <h1 class="my-3 text-only font-weight-bold">HISTORY</h1>
            </div>
        </div>

        <div class="col-12">
            @if ($count > 0)
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-uppercase text-center" scope="col">code</th>
                        <th class="text-uppercase text-center" scope="col">total</th>
                        <th class="text-uppercase text-center" scope="col">time</th>
                        <th class="text-uppercase text-center" scope="col">address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $value)
                    <tr class="text-center">
                        <th>
                            <a class="text-decoration-none text-lightpurple" href="{{ route('history.show', $value->order_id) }}">
                                {{$value->order_id}}
                            </a>
                        </th>
                        <td class="text-success font-weight-bold">$&nbsp
                            <span class="text-dark">{{$value->order_total}}</span>
                        </td>
                        <td class="font-weight-bold text-danger">{{date('d/m/Y H:i', strtotime($value->created_at))}}</td>
                        <td class="font-weight-bold">{{$value->order_address}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="d-flex flex-column align-items-center">
                <img src="frontend/img/8.png" width="60%">
                <h3 class="text-only font-weight-bold text-uppercase">You do not have any orders</h3>
            </div>
            
            @endif
            
        </div>
    </div>
</div>
@endsection