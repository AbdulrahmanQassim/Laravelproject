@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="jumbotron">
                            <h1>Welcome Admin</h1>
                            <p>Here you can change and make controlling on this website by using these options(actions && products)
                            from actions you can add more departments also from products you can add and contole by the products</p>
                            <p>
                                <a class="btn btn-primary btn-lg" href="#"
                                   role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection