@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


    <div class="panel panel-default text-center">
        Create new Category
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="panel-body">
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group mt-5">
                <button class="btn btn-success" type="submit">
                    Store Category
                </button>
            </div>

        </form>
    </div>


@endsection
