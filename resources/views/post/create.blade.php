@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="/news/create" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Name of product</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>details</label>
                <textarea name="post" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="integer" name="num" class="form-control">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="integer" name="price" class="form-control">
            </div>


            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label>Action</label>
                <select name="categories">
                    @foreach($categories as $catgory)
                        <option value="{{ $catgory->id }}">
                            {{ $catgory->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Slide or Not</label>
                <input type="checkbox" name="slide" value="{{ true }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="/news" class="btn btn-default">Back</a>
            </div>
        </form>
    </div>
@endsection