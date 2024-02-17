@extends('master')

@section('title')
    Product Detail Page
@endsection

@section ('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card body">
                        <h1 class="text-center" style="color: #06357a">{{$product['title']}}</h1>
                        <hr/>
                        <img src="{{asset('/')}}img/{{$product['image']}}" alt="" class="w-10 h-10"/>
                        <h1 class="mt-4" style="color: #1a1e21">{{$product['price']}}</h1>
                    </div>
                </div>
                <div class="col-6">

                        <p class="mt-4" style="color: #1a1e21">{{$product['description1']}}</p>

                        <p class="mt-4" style="color: #1a1e21">{{$product['description2']}}</p>


                </div>
                    </div>
                </div>
            </div>
        </div>
@endsection



