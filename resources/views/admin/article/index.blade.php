@extends('admin.master')
@section('title', 'ARTICLE')
@section('content')
<div class="col-12">
    <div class="col-12 p-0">
        <ul class="list-group">
            <li class="list-group-item bg-whitesmoke">
                <h5 class="m-0 font-weight-bold text-center text-uppercase">
                    List Article
                </h5>
            </li>
            <li class="list-group-item">
                <form action="{{ route('article.create') }}" method="get">
                    <button class="btn btn-primary mb-2 font-weight-bold text-uppercase px-3">
                        Create
                    </button>
                </form>
                <div class="col-4 p-0">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('delete'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('delete') }}
                        </div>
                    @endif
                    @if (session('update'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('update') }}
                        </div>
                    @endif
                </div>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-uppercase text-center" scope="col">#</th>
                            <th class="text-uppercase text-center" scope="col">title</th>
                            <th class="text-uppercase text-center" scope="col">description</th>
                            <th class="text-uppercase text-center" scope="col">category</th>
                            <th class="text-uppercase text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $value)
                        <tr>
                            <th class="text-center" style="width: 55px;">{{$value->art_id}}</th>
                            <td class="text-center" style="width: 300px;">{{$value->art_title}}</td>
                            <td class="text-center" style="width: 230px;">{{$value->art_description }}</td>
                            <td class="text-center" style="width: 140px;">{{$value->cate_name}}</td>
                            <td class="text-center d-flex flex-column justify-content-around">
                                <form action="{{ route('article.show', $value->art_id) }}" method="GET">
                                    <button class="btn btn-primary mb-2">
                                        <i class="far fa-eye"></i>
                                    </button>
                                </form>

                                <form action="{{ route('article.edit', $value->art_id) }}" method="GET">
                                    <button class="btn btn-warning mb-2">
                                        <i class="fas fa-marker"></i>
                                    </button>
                                </form>

                                <form action="{{ route('article.delete', $value->art_id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </li>
        </ul>
    </div>
</div>
@endsection