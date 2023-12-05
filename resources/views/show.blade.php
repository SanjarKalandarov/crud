@extends('welcome')
@section('content')

    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>SHow</h2>
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

                            <div class="col-md-6">

                                <div class="brand_box">
                                    <img src="{{ asset('images/'.$brands->image) }}" style="height: 50vh;width:50vw;"  alt="img" />

                                </div>

                            </div>
                    <div class="col-md-6 text-left pt-5">

                        <div class="">
                            <h1>name:<strong class="red">{{$brands->name}}</strong></h1>
                            <h1>Pirce:<strong class="red">{{$brands->price}}</strong></h1>
                            <h1>Operativ:<strong class="red">{{$brands->operativ}}</strong></h1>
                            <h1>Opshiy:<strong class="red">{{$brands->opshiy}}</strong></h1>
                            <h1>Qoshilga  vaqt:<strong class="red">{{$brands->created_at}}</strong></h1>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->

@endsection
