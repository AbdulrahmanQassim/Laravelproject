@extends('layouts.master')
@section('content')
    <br>
    <h1 class="text-center">{{ $category->name }}</h1>
    <div class="row">
        @foreach($news as $item)
            <div class="col-md-4">
                <div class="card" style="border: 1px solid #333333">
                    <img class="card-img-top img-responsive" style="height: 200px!important;"
                         src="/uploaded_images/{{ $item->image }}"
                         alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">{{ $item->title }}</h4>
                        <p class="card-text">{{ $item->post }}</p>
                        <p class="card-text">{{ $item->num }}</p>
                        <p class="card-text">{{ $item->action }}</p>
                        <h4 class="card-title">{{ $item->price }}</h4>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center">
        {{ $news->links() }}
    </div>
    <br>
@endsection