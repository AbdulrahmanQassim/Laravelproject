@extends('layouts.app')

@section('content')

    <div class="row">
        <a href="/create" class="btn btn-success">Create Sponer</a>
    </div>
    <br>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name Of Product</th>

                <th>Action</th>
                <th>Phone</th>
                <th>Price</th>

                <th>Date</th>
                <th>Delete</th>
            </tr>
            @foreach($news as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->num }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->created_at->diffForHumans() }}</td>
                    <td>
                        <form action="/news/delete/{{ $item->id }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection