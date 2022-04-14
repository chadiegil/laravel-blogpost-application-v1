@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        Create a Post
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="panel-body">

        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="featured" id="featured">Featured Image</label>
                <input type="file" name="featured" class="form-control">
            </div>


            <div class="form-group mt-3 ">
                <label for="category_id">Category</label>
                <select name="category_id" id="category" class="form-control">

                    @foreach($categories as $cat)


                        <option value="{{ $cat->id }}">
                            {{ $cat->name }}
                        </option>

                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols=5" rows=5" class="form-control"></textarea>
            </div>
            <div class="form-group mt-5">
                <button class="btn btn-success" type="submit">
                    Store Post
                </button>
            </div>

        </form>
    </div>


@endsection
