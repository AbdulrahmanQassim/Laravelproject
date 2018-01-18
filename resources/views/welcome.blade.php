@extends('layouts.master')
@section('content')
    <div class=container-fluid">
    <div class=row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
           <div class="carousel-inner">
                @foreach($slide as $key => $item)
                   <div class="item {{$key== 0? "active" : ""}}">
                    <img src="/uploaded_images/{{$item->image}}"width="100%" style="height: 400px!important;" border="1px solid #333333">
                    <div class="carousel-caption">
                        <h3>{{$item->title}}</h3>
                        <p>{{$item->price}} $</p>
                    </div>
                   </div>
           @endforeach

            <ul class="nav nav-pills nav-justified">
                @foreach($slide as $key => $item)
                    <li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$key== 0? "active" : ""}}">
                    <a href="#">{{$item->title}}
                        <small>{{$item->num}}</small>
                    </a>
                    </li>
                @endforeach
            </ul>
           </div>
        </div>
    </div>
        <h1 class="text-center "  style="background-color: lavender">All Products</h1>

     @foreach($views as $item)

        <div class="layout">
            {{--<section class="inner">--}}
                <ul class="grid">
                    {{--<div class="col-md-4">--}}
                    <div class="grid-tile">

                        <div class="item">

                            <div class="item-img" style="background-image:url('/uploaded_images/{{$item->image}}')
                                    ; background-size: auto auto; background-size: 150%;
                                    background-position: center 30%;">

                            </div>
                            <div class="item-pnl">
                                <div class="pnl-wrapper">
                                    <div class="pnl-description">
                                        <span class="pnl-label">{{$item->title}}</span>
                                        {{--<span class="pnl-label">{{$item->post}}</span>--}}
                                        <span class="pnl-label">{{$item->num}}</span>
                                        <span class="pnl-price">{{$item->price}} $</span>
                                    </div>
                                    <div class="pnl-favorites">
                                        <div class="pnl-ic-wrapper">
                                            <span class="pnl-ic"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve"><path d="M22.6,6.5c-2.9,0-5.4,1.7-6.6,4.1c-1.2-2.4-3.7-4.1-6.6-4.1C5.3,6.5,2,9.8,2,13.9C2,23.7,15.8,29,15.8,29S30,23.6,30,13.9C30,9.8,26.7,6.5,22.6,6.5L22.6,6.5z"></path></svg></span>
                                        </div>
                                    </div>
                                    <div class="pnl-tocart">
                                        <div class="pnl-ic-wrapper">
                                            <span class="pnl-ic">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve"><g>
                                                        <path d="M25.4,29H6.6c-1.7,0-3-1.4-2.8-2.9l1.9-13.8C5.9,11,6.6,10,8,10h16c1.4,0,2.1,1,2.3,2.3l1.9,13.8 C28.4,27.6,27.1,29,25.4,29z"></path>
                                                        <path d="M10.6,12.7V8.4C10.6,5.4,13,3,16,3h0c3,0,5.4,2.4,5.4,5.4v4.3"></path></g></svg></span>

                                        </div>
                                    </div>
                                </div>
                    </div>
        </div>
    </div>
                    @endforeach
                </ul>


    <br>



            @endsection
@section('js')

            <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'>
            </script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'>
            </script>
            <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'>
            </script>
            <script>









        $(document).ready(function () {
            $('#myCarousel').carousel({
                interval: 4000
            });
            var clickEvent = false;
            $('#myCarousel').on('click', '.nav a', function () {
                clickEvent = true;
                $('.nav li').removeClass('active');
                $(this).parent().addClass('active');
            }).on('slid.bs.carousel', function (e) {
                if (!clickEvent) {
                    var count = $('.nav').children().length - 1;
                    var current = $('.nav li.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if (count == id) {
                        $('.nav li').first().addClass('active');
                    }
                }
                clickEvent = false;
            });
        });
    </script>
@endsection