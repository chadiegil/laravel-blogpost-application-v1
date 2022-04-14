@extends('layouts.app')

@section('content')


    @include('admin.includes.errors')


    <div class="panel panel-default text-center">
        Update Category {{ $category->name }}
    </div>
    <div class="panel-body">
        <form action="{{ route('category.update',['id'=>$category->id]) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control">
            </div>

            <div class="form-group mt-5">
                <button class="btn btn-success" type="submit">
                    Update Category
                </button>
            </div>

        </form>
    </div>


@endsection
