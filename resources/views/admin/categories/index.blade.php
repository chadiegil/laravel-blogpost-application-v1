@extends('layouts.app')
@section('content')


    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

  <div class="panel panel-default">
      <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <th>Category name</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
               @foreach ($categories as $category)

                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('category.edit',['id'=>$category->id]) }}" class="btn btn-xs btn-info">
                            <span class="bi bi-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('category.delete',['id'=>$category->id]) }}" class="btn btn-xs btn-danger">
                            <span class="bi bi-trash3-fill"></span>
                        </a>
                    </td>
                </tr>

               @endforeach
            </tbody>
        </table>

      </div>
  </div>

@endsection
