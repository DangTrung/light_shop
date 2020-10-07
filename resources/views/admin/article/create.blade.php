@extends('admin.master')
@section('title', 'CREATE ARTICLE')
@section('content')
<div class="col-12 d-flex">
    <div class="col-1 mr-5">
        <form action="{{ route('article.index') }}" method="get">
            <button type="submit" class="btn btn-danger text-uppercase mt-2 font-weight-bold">
                <i class="fas fa-reply fa-lg"></i>
            </button>
        </form>
    </div>
    <div class="col-9 mb-3">
        @include('error.note')
        <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="text-uppercase font-weight-bold">title</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="form-group">
                <label class="text-uppercase font-weight-bold">image</label>
                <input type="file" class="form-control-file hidden" name="image" onchange="changeImg(this)">
                <img id="avatar" class="img-thumbnail" src="backend/img/cursor.jpg" width="500px">
            </div>
            <div class="form-group">
                <label class="text-uppercase font-weight-bold">description</label>
                <input type="text" class="form-control" name="description" required>
            </div>
            <div class="form-group">
                <label class="text-uppercase font-weight-bold">content</label>
                <textarea class="form-control" id="editor1" name="content" required></textarea>
                <script>
                    CKEDITOR.replace('editor1');
                </script>
            </div>
            <div class="form-group">
                <label class="text-uppercase font-weight-bold">categories</label>
                <select class="form-control font-weight-bold" name="categories" required>
                    @foreach ($categories as $value)
                    <option value="{{$value->cate_id}}">{{$value->cate_name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary text-uppercase font-weight-bold px-3">
                Submit
            </button>
        </form>
    </div>
</div>
@endsection