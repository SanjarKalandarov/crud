@extends('welcome')
@section('content')

    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Brand</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- brand -->
    <div class="brand">
        <div class="container">

        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
             @foreach ($brands as $brand)
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                                <a href="{{route("brand.show",$brand->id)}}">
                                <div class="brand_box">
                                    <img src="{{ asset('images/'.$brand->image) }}" style="height: 50vh;width:50vw;"  alt="img" />
                                    <h3>$<strong class="red">{{$brand->price}}</strong></h3>
                                    <span>{{$brand->name}}</span>
                                </div>
                                </a>
                            </div>

                    @endforeach

                    <div class="col-md-12">
                        <a class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->

@endsection
